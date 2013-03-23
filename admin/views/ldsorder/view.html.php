<?php
/**
 * @name        view for lds order
 * @package		Backend
 * @subpackage  com_lds
 * @author      P.Santos | A.Ruttkamp | R.Drexler
 * @email:	    info@lds.de
 * @website:	http://www.lds.de
 * @version:	2.5.0
 * @date:		23.01.2013
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JLoader::import('joomla.application.componet.view');

class ldsViewOrder extends Jview {
    protected $item;
    protected $form;

    public function display($tpl = null) {
        JFactory::getApplication()->input->set('hidemainmenu',true);

        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        $this->addToolbar();
        parent::display($tpl);
    }
    protected function addToolbar() {
    if ($this->item->id == 0) {
        JToolBarHelper::title(JText::_('COM_LDS_NEW'));
        }
    else {
        JToolBarHelper::title(JText::_('COM_LDS_CHANGE'));
        }

    JToolBarHelper::apply('order.apply', 'JTOOLBAR_APPLY');
    JToolBarHelper::save('order.save', 'JTOOLBAR_SAVE');
    JToolBarHelper::save2copy('order.save2copy');
    JToolBarHelper::save2new('order.save2new');
    JToolBarHelper::cancel('order.cancel', 'JTOOLBAR_CANCEL');
    }
}