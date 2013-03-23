<?php
/**
 * @name        View for lds_orders
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

// no direct access
defined('_JEXEC') or die;
?>


<h2><?php echo JText::_("COM_LDS_ORDERS_TITEL");?></h2>
<span class="lds_small lds_fright">(<?php echo JText::_("COM_LDS_ORDER_TYPE_DESC")." ".JText::_("COM_LDS_ORDER_TYPE_1")." ".JText::_("COM_LDS_ORDER_TYPE_2")." ".JText::_("COM_LDS_ORDER_TYPE_3"); ?>)</span>
<table class="lds_orders" border="0">
    <tr>
        <th></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_DEALER"); ?></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_CUSTOMER"); ?></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_IND"); ?></th>
        <th class="lds_typ"><?php echo JText::_("COM_LDS_ORDER_TYPE"); ?></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_FROM_VERSION"); ?></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_TILL_VERSION"); ?></th>
        <th class="lds_num"><?php echo JText::_("COM_LDS_DESIRED_DATE"); ?></th>
        <th class=""><?php echo JText::_("COM_LDS_REMARKS"); ?></th>
        <th class="lds_typ lds_center"><?php echo JText::_("COM_LDS_STATUS"); ?></th>
    </tr>
    <?php foreach ($this->items as $item): ?>
    <tr>
        <td class="lds_icon"><a href="<?php echo JRoute::_('index.php?option=com_lds&view=ldsorder&id='.$item->id);?>"><img src="components/com_lds/assets/images/ico_edit.png"></a></td>
        <td><?php echo $item->dealer_number; ?></td>
        <td><?php echo $item->customer_number; ?></td>
        <td><?php echo $item->ind_number; ?></td>
        <td><?php echo $item->order_type; ?></td>
        <td><?php echo $item->from_version; ?></td>
        <td><?php echo $item->to_version; ?></td>
        <td><?php echo JHtml::_('date',$item->desired_date,'d.m.Y'); ?></td>
        <td class="lds_left"><?php echo $item->remarks; ?></td>
        <td><?php echo $item->status; ?></td>
    </tr>
<?php endforeach; ?>
</table>