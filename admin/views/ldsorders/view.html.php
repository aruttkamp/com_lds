<?php
/**
 * @name        view for lds orders
 * @package		Backend
 * @subpackage  com_lds
 * @author      P.Santos | A.Ruttkamp | R.Drexler
 * @email:	    info@lds.de
 * @website:	http://www.lds.de
 * @version:	2.5.0
 * @date:		09.01.2013
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('JEXEC') or die;
jimport('joomla.application.component.view');

class ldsViewOrders extends JView
{
protected $items;

    public  function display($tpl = null) {
        $this->addToolbar();
        $this->items = $this->get('items');
        parent::display($tpl);
    }
    protected  function addToolbar() {
        JToolBarHelper::title(JText::_('COM_LDS_ADMIN'));
        JToolBarHelper::addNew('order.add', 'JTOOLBAR_NEW');
        JToolBArHelper::editList('order.edit', 'JTOOLBAR_EDIT');
        JToolBarHelper::deleteList('', 'orders.delete', 'JTOOLBAR_DELETE');
    }


}