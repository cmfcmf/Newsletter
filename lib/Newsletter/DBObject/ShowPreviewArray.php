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

$dom = ZLanguage::getModuleDomain('Newsletter');

if (!class_exists('Newsletter_DBObject_NewsletterDataArray')) {
    return LogUtil::registerError(__f('Unable to load array class [%s]', 'newsletter_data', $dom));
}

class Newsletter_DBObject_ShowPreviewArray extends Newsletter_DBObject_NewsletterDataArray
{
    public function __construct($init=null, $where='')
    {
        parent::__construct();
    }
}
