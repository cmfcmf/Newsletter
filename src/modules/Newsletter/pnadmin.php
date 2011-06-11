<?php
/**
 * Newletter Module for Zikula
 *
 * @copyright © 2001-2010, Devin Hayes (aka: InvalidReponse), Dominik Mayer (aka: dmm), Robert Gasch (aka: rgasch)
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

function Newsletter_admin_main()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::modifyconfig', '::', ACCESS_ADMIN)) {
        return __("You don't have Admin rights for this module", $dom);
    }

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return __("Unable to load class [newsletter_util]", $dom);
    }

    $render = Zikula_View::getInstance('Newsletter', false);

    $render->assign('preferences', ModUtil::getVar('Newsletter'));

    return $render->fetch('newsletter_admin_main.tpl');
}

function Newsletter_admin_settings()
{
   return Newsletter_admin_modifyconfig();
}

function Newsletter_admin_modifyconfig()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::modifyconfig', '::', ACCESS_ADMIN)) {
        return __("You don't have Admin rights for this module", $dom);
    }

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return __("Unable to load class [newsletter_util]", $dom);
    }

    $preferences = ModUtil::getVar('Newsletter');

    $view = Zikula_View::getInstance('Newsletter', false);

    $view->assign ('preferences', $preferences);
    $view->assign ('last_execution_time', ModUtil::getVar('Newsletter','end_execution_time') - ModUtil::getVar('Newsletter','start_execution_time'));
    $view->assign ('last_execution_count', ModUtil::getVar('Newsletter','end_execution_count', 0));

    return $view->fetch('newsletter_admin_modifyconfig.tpl');
}

function Newsletter_admin_edit()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::', '::', ACCESS_ADMIN)) {
        return LogUtil::registerError (__("You don't have Admin rights for this module", $dom), null, $url);
    }

    $ot  = 'user';
    $id  = (int)FormUtil::getPassedValue ('id', 0, 'GETPOST');
    $url = ModUtil::url('Newsletter', 'admin', 'main');

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return LogUtil::registerError (__('Unable to load class [newsletter_util]', $dom), null, $url);
    }

    if (!($class = Loader::loadClassFromModule ('Newsletter', $ot))) {
        return LogUtil::registerError (__("Unable to load class for [$ot]", $dom), null, $url);
    }

    $object = new $class ();
    if ($id) {
        $data = $object->get ($id);
        if (!$data) {
            $url = ModUtil::url('Newsletter', 'admin', 'view', array('ot' => $ot));
            return LogUtil::registerError (__("Unable to retrieve object of type [$ot] with id [$id]", $dom), null, $url);
        }
    } else {
        $data = array();
    }

    $view = Zikula_View::getInstance('Newsletter', false);
    $view->assign ('ot', $ot);
    $view->assign ($ot, $data);
    $view->assign ('validation', $object->getValidation());

    $tpl = 'newsletter_admin_form_' . $ot . '.tpl';
    return $view->fetch($tpl);
}

function Newsletter_admin_view()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::', '::', ACCESS_ADMIN)) {
        return LogUtil::registerError (__("You don't have Admin rights for this module", $dom), null, $url);
    }

    $dPagesize = ModUtil::getVar ('Newsletter', 'pagesize', 25);
    $filter    = FormUtil::getPassedValue ('filter', array(), 'GETPOST');
    $format    = FormUtil::getPassedValue ('format', null, 'GETPOST');
    $ot        = FormUtil::getPassedValue ('ot', null, 'GETPOST');
    $otTarget  = FormUtil::getPassedValue ('otTarget', null, 'GETPOST');
    $offset    = FormUtil::getPassedValue ('startnum', 0, 'GETPOST');
    $sort      = FormUtil::getPassedValue ('sort', null, 'GETPOST');
    $url       = ModUtil::url('Newsletter', 'user', 'view', array('ot' => $ot));
    $pagesize  = FormUtil::getPassedValue ('pagesize', SessionUtil::getVar('pagesize', $dPagesize, '/Newsletter'));

    if ($sort) {
        $filter['sort'] = $sort;
    }

    if (isset($filter['sort']) && $filter['sort']) {
        // reverse sort order if we sort on the same field again
        $sort    = $filter['sort'];
        $oldSort = SessionUtil::getVar ('oldSort', $sort, '/Newsletter');
        $oldOt   = SessionUtil::getVar ('oldOt', $sort, '/Newsletter');
        if ($ot == $oldOt && $sort == $oldSort && strpos ($sort, 'DESC')===false) {
            $sort .= ' DESC';
        }
    }
    if (!$sort) {
        $sort = 'cr_date DESC';
    }
    SessionUtil::setVar ('oldSort', $sort, '/Newsletter');
    SessionUtil::setVar ('oldOt', $ot, '/Newsletter');
    SessionUtil::setVar ('pagesize', $pagesize, '/Newsletter');

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return LogUtil::registerError (__('Unable to load class [newsletter_util]', $dom), null, $url);
    }

    $view = Zikula_View::getInstance('Newsletter', false);
    $view->assign ('ot', $ot);

    $data  = array();
    if ($ot) {
        if (($class = Loader::loadArrayClassFromModule ('Newsletter', $ot))) {
          $objectArray = new $class ();
          if (method_exists($objectArray, 'cleanFilter')) {
              $filter = $objectArray->cleanFilter($filter);
          }
          $where = $objectArray->genFilter ($filter);
          $sort  = $sort ? $sort : $objectArray->_objSort;
          $data  = $objectArray->get ($where, $sort, $offset, $pagesize);

          $pager = array();
          $pager['numitems']     = $objectArray->getCount ($where, true);
          $pager['itemsperpage'] = $pagesize;
          $view->assign ('startnum', $offset);
          $view->assign ('pager', $pager);
          $view->assign ('startpage', false);
       }
    }

    $view->assign ('objectArray', $data);

    if ($ot == 'user') {
        $view->assign ('filter', $filter);
    }

    //EM Start
    if ($ot == 'plugin') {
          if (method_exists($objectArray, 'getPluginsParameters')) {
              $view->assign ('plugin_parameters', $objectArray->getPluginsParameters());
          }
    }
    //EM End

    if ($ot == 'show_preview') {
        switch ($format){
            case 1:
                $content = $view->fetch('newsletter_template_text.tpl');
                $content = str_replace(array("\n","\r"),'<br />',$content);
                break;
            case 2:
                $content = $view->fetch('newsletter_template_html.tpl');
                break;
            case 3:
                $content = $view->fetch('newsletter_template_text_with_link.tpl');
                $content = str_replace(array("\n","\r"),'<br />',$content);
                break;
            default:
                $content = 'Invalid format [$format] specified...';
        }

        $testsend = FormUtil::getPassedValue ('testsend', 0, 'POST');
        $testsendEmail = FormUtil::getPassedValue ('testsend_email', 0, 'POST');
        if ($testsend) {
            $rc = true;
            if (!$testsendEmail) {
                $rc = LogUtil::registerError (__('Your test email was not sent since you did not enter an email address', $dom));
            }
            if (!System::varValidate($testsendEmail, 'email')) {
                $rc = LogUtil::registerError (__('The email address you entered does not seem to be valid', $dom));
            }
            if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_send')) {
                $rc = LogUtil::registerError (__('Unable to load class [newsletter_send]', $dom), null, $url);
            }

            if ($rc) {
                $sendObj = new PNNewsletterSend ();
                if ($sendObj->save ()) {
                    LogUtil::registerStatus (_NEWSLETTER_EMAIL_SUCCESS);
                } else {
                    LogUtil::registerError (__('Failure sending the test email', $dom));
                }
           }
        }
        echo $content;
        exit;
    }

    $template = 'newsletter_admin_view_' . $ot . '.tpl';
    return $view->fetch($template);
}

function Newsletter_admin_archive()
{
   return Newsletter_admin_modifyarchive();
}

function Newsletter_admin_modifyarchive()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::modifyarchive', '::', ACCESS_ADMIN)) {
        return LogUtil::registerPermissionError();
    }

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return LogUtil::registerError (__('Unable to load class [newsletter_util]', $dom));
    }

    $preferences_archive = ModUtil::getVar('Newsletter');

    $view = Zikula_View::getInstance('Newsletter', false);

    $view->assign ('preferences_archive', $preferences_archive);
    $view->assign ('last_execution_time', ModUtil::getVar('Newsletter','end_execution_time') - ModUtil::getVar('Newsletter','start_execution_time'));
    $view->assign ('last_execution_count', ModUtil::getVar('Newsletter','end_execution_count', 0));

    return $view->fetch('newsletter_admin_modifyarchive.tpl');
}

function Newsletter_admin_archive_edit()
{
    $dom = ZLanguage::getModuleDomain('Newsletter');

    if (!SecurityUtil::checkPermission('Newsletter::', '::', ACCESS_ADMIN)) {
        return LogUtil::registerPermissionError();
    }

    $ot  = 'user';
    $id  = (int)FormUtil::getPassedValue ('id', 0, 'GETPOST');
    $url = ModUtil::url('Newsletter', 'admin', 'main');

    if (!Loader::loadClassFromModule ('Newsletter', 'newsletter_util', false, false, '')) {
        return LogUtil::registerError (__('Unable to load class [newsletter_util]', $dom), null, $url);
    }

    if (!($class = Loader::loadClassFromModule ('Newsletter', $ot))) {
        return LogUtil::registerError (__('Unable to load class for [$ot]', $dom), null, $url);
    }

    $object = new $class ();
    if ($id) {
        $data = $object->get ($id);
        if (!$data) {
            $url = ModUtil::url('Newsletter', 'admin', 'view', array('ot' => $ot));
            return LogUtil::registerError (__("Unable to retrieve object of type [$ot] with id [$id]", $dom), null, $url);
        }
    } else {
        $data = array();
    }

    $view = Zikula_View::getInstance('Newsletter', false);

    $view->assign ('ot', $ot);
    $view->assign ($ot, $data);
    $view->assign ('validation', $object->getValidation());

    return $view->fetch("newsletter_admin_form_{$ot}.tpl");
}