<?php
/**
 * Joomla! 2.5 - Erweiterungen programmieren
 *
 * Tabelle LDSorders
 *
 * @package    LDS
 * @subpackage Backend
 * @author     chmst.de, webmechanic.biz
 * @license    GNU/GPL
 */
defined('_JEXEC') or die;

/**
 * Erweiterung der Klasse JTable
 */
class ldsTableLDSOrders extends JTable
{
    public $id;
    public $dealer_number;
    public $customer_number;
    public $ind_number;
    public $order_type;
    public $from_version;
    public $to_version;
    public $desired_date;
    public $maintenance;
    public $maintenance_til;
    public $cost;
    public $coder;
    public $remarks;
    public $status;
    public $user_id;

    /**
     * Konstruktor setzt Tabellenname, Primärschlüssel und das übergebene Datenbankobjekt.
     */
    public function __construct($db)
    {
        parent::__construct('#__lds_orders', 'id', $db);
    }

}
