<?php
/**
 * @name        template for lds orders
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

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
$nullDate = JFactory::getDbo()->getNullDate();

?>

<form action="<?php echo
    JRoute::_('index.php?option=com_lds&view=orders'); ?>" method ="post"
      name="adminForm" id="adminForm">

    <table class="adminlist">
       <thead>
        <tr>
            <th width="10">
                <input type="checkbox" name="checkall-toggle" value=""
                       onclick="checkAll(this)" />
            </th>
           <th width="20%"><?php echo JText::_('COM_LDS_DEALER'); ?></th>
           <th width="20%"><?php echo JText::_('COM_LDS_CUSTOMER'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_IND'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_ORDER_TYPE'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_FROM_VERSION'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_TO_VERSION'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_DESIRED_DATE'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_REMARKS'); ?></th>
            <th width="20%"><?php echo JText::_('COM_LDS_STATUS'); ?></th>
        </tr>
       </thead>
       <tbody>
       <?php foreach ($this->items as $i => $item) :  ?>

       <tr class="row<?php echo $i % 2; ?>">
           <td class="center">
               <?php echo JHtml::_('grid.id', '$i', $item->id); ?>
           </td>
           <td>
               <?php $mylink = JRoute::_("index.php?option=com_lds&task=orders.edit&id=".$item->id );
                echo '<a href="'.$mylink.'">'.$this->escape($item->dealer) .'</a>'; ?>
           </td>
           <td><?php echo $this->escape($item->customer); ?> </td>
           <td><?php echo $this->escape($item->ind); ?> </td>
           <td><?php echo $this->escape($item->order_type); ?> </td>
           <td><?php echo $this->escape($item->from_version); ?> </td>
           <td><?php echo $this->escape($item->to_version); ?> </td>
           <td>
                <?php
                    if ($item->desierd_date !=$nullDate) {
                        echo JHtml::_('date', $item->desired_date, JText::_('DATE_FORMAT_LC4'));
                    } ?>
           </td>
           <td><?php echo $this->escape($item->remarks); ?> </td>
           <td><?php echo $this->escape($item->status); ?> </td>
       </tr>
       <?php endforeach; ?>
       </tbody>
    </table>
    <div>
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="boxchecked" value="0"/>
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>