<?php
/**
 * Joomla! 2.5 - Erweiterungen programmieren
 *
 * Das Model Ldsorders liefert Daten für die Übersicht
 *
 * @package    LDS
 * @subpackage Backend
 * @author     chmst.de, webmechanic.biz
 * @license	   GNU/GPL
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');

/**
 * Erweiterung der Klasse JModelList, abgeleitet von JModel
 */
class ldsModelLDSOrders extends JModellist
{

    /**
     * Datenbankabfrage für die Listenansicht aufbauen.
     * Suchfilter und Sortierung werden berücksichtigt, ansonsten
     * wird aufsteigend nach `bezeichnung` sortiert.
     *
     * @return JDatabaseQuery
     */
    protected function getListQuery()
    {
        /* Referenz auf das Datenbankobjekt */
        $db		= $this->getDbo();

        /* Ein neues, leeres JDatabaseQuery-Objekt anfordern */
        $query	= $db->getQuery(true);

        /* Select-Abfrage in der Standardform aufbauen */
        $query->select('*')->from('#__lds_orders');

        /* Fertig ist die Abfrage */
        return $query;
    }
}
