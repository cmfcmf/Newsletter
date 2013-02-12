<?php
/**
 * Newletter Module for Zikula
 *
 * @copyright  Newsletter Team
 * @license    GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package    Newsletter
 * @subpackage User
 *
 * Please see the CREDITS.txt file distributed with this source code for further
 * information regarding copyright.
 */

class Newsletter_DBObject_PluginNewsletterMessageArray extends Newsletter_DBObject_PluginBaseArray
{
    function Newsletter_DBObject_PluginNewsletterMessageArray($init=null, $where='')
    {
        $this->Newsletter_DBObject_PluginBaseArray();
    }

    function getPluginData($lang=null)
    {
        $defaultLang = System::getVar('language_i18n', 'en');
        $lang = FormUtil::getPassedValue ('language', $defaultLang, 'POST');
        if (empty($lang)) {
            $lang = $defaultLang;
        }
        $vName = 'message';

        if ($lang != $defaultLang) {
            $vName = 'message_' . $lang;
        }

        return ModUtil::getVar ('Newsletter', $vName, '');
    }

    function setPluginParameters()
    {
        $messages = FormUtil::getPassedValue('NewsletterMessage', array(), 'POST');
        ModUtil::setVar('Newsletter', 'message', $messages['text']);

        $defaultLang = System::getVar('language_i18n', 'en');
        $alternateLanguages = ZLanguage::getInstalledLanguageNames();
        unset($alternateLanguages[$defaultLang]);
        foreach ($alternateLanguages as $lang => $v) {
            ModUtil::setVar('Newsletter', "text_$lang", $messages["text_$lang"]);
        }
    }

    function getPluginParameters()
    {
        return array('number' => 1);
    }
}
