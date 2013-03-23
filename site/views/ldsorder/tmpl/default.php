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

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

$item = $this->item;
$params = $this->params;
$user = JFactory::getUser();
$nullDate = JFactory::getDbo()->getNullDate();
?>

<h2><?php echo JText::_("COM_LDS_ORDER_TITEL").$item->dealer_number." Händlername"?></h2>
<ul class="actions">
    <li><a href="<?php echo JRoute::_("index.php?option=com_lds&view=ldsorders") ?>"><img src="components/com_lds/assets/images/exit.jpg"></a></li>
</ul>


<table id="lds_order" class="lds_fleft" border="0">
    <tr>
        <th><?php echo JText::_("COM_LDS_DEALER"); ?></th><td><?php echo $item->dealer_number; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_DEALER_NAME"); ?></th><td>Händlername</td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_CUSTOMER"); ?></th><td><?php echo $item->customer_number; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_CUSTOMER_NAME"); ?></th><td>Kundenname</td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_IND"); ?></th><td><?php echo $item->ind_number; ?></td>
    </tr>
</table>
<table id="lds_order" class="lds_fright" border="0">
    <tr>
        <th><?php echo JText::_("COM_LDS_STATUS_NAME"); ?></th><td><?php echo $item->status; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_ORDER_TYPE"); ?></th><td><?php echo $item->order_type; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_FROM_VERSION_NAME"); ?></th><td><?php echo $item->from_version; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_TILL_VERSION_NAME"); ?></th><td><?php echo $item->to_version; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_DESIRED_DATE"); ?></th><td><?php echo JHtml::_('date',$item->desired_date,'d.m.Y'); ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_MAINTENANCE"); ?></th><td><?php echo $item->maintenance; ?>€</td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_MAINTENANCE_TILL"); ?></th><td><?php echo $item->maintenance_till; ?></td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_COST"); ?></th><td><?php echo $item->cost; ?>€</td>
    </tr>
    <tr>
        <th><?php echo JText::_("COM_LDS_CODER"); ?></th><td><?php echo $item->coder; ?></td>
    </tr>
</table>
<p><?php echo JText::_("COM_LDS_TIMESTAMP").JHtml::_('date',$item->timestamp_new,'d.m.Y').JText::_("COM_LDS_USER").$item->user_id; ?></p>

<br class="lds_clear"><br>
<table id="lds_order" border="0">
    <tr>
        <th class=""><?php echo JText::_("COM_LDS_REMARKS"); ?></th>
    </tr>
    <tr>
        <td><?php echo $item->remarks; ?>
    </tr>
</table>
    <!--
	<form id="ldsorder" action="<?php echo JRoute::_('index.php?option=com_lds'); ?>" method="post" >
        <fieldset>
            <dl>
                <?php foreach ($this->form->getFieldset('ldsorder') as $field) : ?>
                <dt><?php echo $field->label; ?></dt>
                <dd><?php echo $field->input; ?></dd>
                <?php endforeach; ?>
            </dl>
        </fieldset>

        <button  type="submit"><?php echo JText::_('COM_MYTHINGS_BUTTON_LEND'); ?></button>
        <input type="hidden" name="task" value="mything.lend" />
        <?php echo JHtml::_( 'form.token' ); ?>
    </form>
	-->



