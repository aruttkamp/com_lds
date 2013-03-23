<?php
/**
 * @name        Controller for lds_orders
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

// No direct access
defined('JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class ldsControllerOrders extends JControllerAdmin
{
    public function getModel($name = 'MyThing', $prefix = 'MyThingsModel', $config = array())
    {
        // Model nicht automatisch mit Inhalten aus dem Request befüllen
        $config['ignore_request'] = true;

        // restliche Arbeit der Elternklasse überlassen
        return parent::getModel($name, $prefix, $config);
    }

}

