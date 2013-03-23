<?php
/**
 * @name        template for lds ordrs
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
// No direct access
defined('JEXEC') or die; ?>

<form action="<?php echo JRoute::_('index.php?option=com_lds&id=' .(int) $this->item->id); ?>" method="post" name="adminForm" id=" adminForm">


    <fieldset class="adminForm">
        <legend>
            <?php echo JText::_('COM_LDS_DATA_SET'); ?>
        </legend>
        <ul class="adminformlist">
            <li><?php echo $this->form->getLabel('Dealer'); ?>
                <?php echo $this->form->getInput('Dealer'); ?>
            </li>
            <li><?php echo $this->form->getLabel('Customer'); ?>
                <?php echo $this->form->getInput('Customer'); ?>
            </li>
            <li><?php echo $this->form->getLabel('IND'); ?>
                <?php echo $this->form->getInput('IND'); ?>
            </li>
            <li><?php echo $this->form->getLabel('Order Type'); ?>
                <?php echo $this->form->getInput('Order Type'); ?>
            </li>
            <li><?php echo $this->form->getLabel('From Version'); ?>
                <?php echo $this->form->getInput('From Version'); ?>
            </li>
            <li><?php echo $this->form->getLabel('To Version'); ?>
                <?php echo $this->form->getInput('To Version'); ?>
            </li>
            <li><?php echo $this->form->getLabel('Desired Date'); ?>
                <?php echo $this->form->getInput('Desired Date'); ?>
            </li>
            <li><?php echo $this->form->getLabel('Remarks'); ?>
                <?php echo $this->form->getInput('Remarks'); ?>
            </li>
            <li><?php echo $this->form->getLabel('Status'); ?>
                <?php echo $this->form->getInput('Status'); ?>
            </li>
        </ul>
    </fieldset>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>