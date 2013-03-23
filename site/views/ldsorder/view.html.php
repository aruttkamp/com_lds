<?php
/**
 * @name        View for lds_order
 * @package		Frontend
 * @subpackage  com_lds
 * @author      P.Santos | A.Ruttkamp | R.Drexler
 * @email:	    info@lds.de
 * @website:	http://www.lds.de
 * @version:	2.5.0
 * @date:		08.12.2012
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class LDSViewLDSOrder extends JView
{
    protected $item;
    protected $params;
    protected $form;


    function display($tpl = null)
    {
        $document 	= & JFactory::getDocument();
        $document->addStyleSheet($this->baseurl.'/components/com_lds/assets/css/default.css');
        $this->item = $this->get('item');
        $this->form = $this->get('form');
        parent::display($tpl);
    }
}