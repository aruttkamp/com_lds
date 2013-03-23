<?php
/**
 * @name        Model for lds_orders
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

defined( '_JEXEC' ) or die( 'Restricted access' );

	jimport('joomla.application.component.controller');

	// Create the controller
	$controller = JController::getInstance('lds');

    //
    $input = JFactory::getApplication()->input;

	// Perform the Request task
	$controller->execute($input->get('task'));


 ?>