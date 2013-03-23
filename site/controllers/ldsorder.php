<?php
/**
 * @name        Controllers for lds_order
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
jimport('joomla.application.component.controllerform');


class LdsOrdersControllerLdsOrder extends JControllerForm
{
  public function getTable($type = 'LdsOrders', $prefix = 'LdsOrdersTable', $config = array())
    {
        /* Tabellen-Klassen sind im Backend zuhause. Pfad angeben */
        JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR . '/tables');

        /* Instanz der Tabelle wird zurückgegeben */
        return JTable::getInstance($type, $prefix, $config);
    }
    public function addorder()
    {
        /* Sicherstellen, dass die Eingabe wirklich aus dem Formular kommt */
        JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

        /* Die Eingaben ins Formular stehen im Inputbereich */
        $input = JFactory::getApplication()->get('input');

        /* Die Eingaben als Array aus jform des Input-Bereichs holen */
        $data = $input->get('jform', array(), 'post', 'array');

        /* Die id des Benutzers als Ausleiher-id in das Array der Daten eintragen */
        $data['add_by_id'] = JFactory::getUser()->id;

        /* Es geht stets zurück zur Übersicht */
        $this->redirect = 'index.php?option=com_ldsorders&view=ldsorder';

        try
        {
            /* Daten übergeben und speichern */
            $table = $this->getTable();

            if ($table->save($data)) {
                // Erfolgsmeldung
                $this->message = JText::_('Anfrage erfolgreich');
            } else {
                // altmodischer JError-Fehler aus JTable
                $this->message = JText::_( $table->getError() );
            }
        }
        catch(Exception $e)
        {
            // Meldung aus dem Ausnahmefehler
            $this->message = $e->getMessage();
        }

        /* Zurück zur Übersicht */
        $this->redirect();
  }

}
