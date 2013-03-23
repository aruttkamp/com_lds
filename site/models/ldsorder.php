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

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.modelitem');
jimport('joomla.application.component.modelform');

class LDSModelLDSOrder extends JModelForm {

    public function getForm($data = array(), $loadData = true)
    {
        // Angaben zu den HTML-Elementen
        $options = array('control' => 'jform', 'load_data' => $loadData);
        $form    = $this->loadForm('ldsorders', 'ldsorder', $options);
        if (empty($form)) {
            return false;
        }

        return $form;
    }

    /**
     * Ermittelt die Daten für das Formular aus einem vorherigen
     * Dialogschritt (passiert bei einem Eingabefehler) oder dem
     * aktuellen Datensatz.
     *
     * @return object Datensatz oder Eingaben aus vorherigem Dialogschritt
     */
    protected function loadFormData()
    {
        /* Daten aus dem Sitzungsspeicher holen sofern vorhanden */
        $app  = JFactory::getApplication();
        $data = $app->getUserState('com_lds.add.ldsorder.data', array());

        /* ggf. Datensatz aus der Tabelle einlesen */
        if (empty($data)) {
            $data = $this->getItem();
        }

        return $data;
    }

    public function getItem($id = null) {
        $app = JFactory::getApplication();
        $requested_id = $app->get('input')->get('id',0,'int');
        if ($requested_id > 0){
            $db=$this->getDbo();
            $query=$db->getQuery(true);
            $query->from('#__lds_orders');
            $query->select('*');
            $query->where('id ='.$requested_id);
            $db->setQuery($query);
            $result = $db->loadObject();
        }
        return $result;
    }

}