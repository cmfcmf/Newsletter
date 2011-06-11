<?php
/**
 * Newletter Module for Zikula
 *
 * @copyright © 2001-2009, Devin Hayes (aka: InvalidReponse), Dominik Mayer (aka: dmm), Robert Gasch (aka: rgasch)
 * @link http://www.zikula.org
 * @version $Id: pnuser.php 24342 2008-06-06 12:03:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * Support: http://support.zikula.de, http://community.zikula.org
*/


if (!Loader::loadClassFromModule('Newsletter', 'user')) {
    return LogUtil::registerError (__('Unable to load class [user] ... ', $dom));
}


class PNUserDelete extends PNUser 
{
    function PNUserDelete ($init=null, $key=null, $field=null)
    {
        $this->PNUser ($init, $key, $field);
    }


    function save ()
    {
        return $this->delete ();
    }
}
