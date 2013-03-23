<?php
/**
 * @name        Controller com_lds
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

jimport('joomla.application.component.controller');

class ldsController extends JController
{
    /**
     * @var string Standardview
     */
    protected $default_view = 'ldsorders';

    /**
     * Ausgabe der View ldsorders.
     * @inherit
     */
    public function display($cachable = false, $urlparams = false)
    {
        /* @var $input JInput Unsere Einnahmequelle */
        $input = JFactory::getApplication()->input;

        // alle Variablen mit Vorgabewerten initialisieren
        $view   = $input->get('view', $this->default_view);
        $layout = $input->get('layout', 'default');
        $id     = $input->get('id');

        if ($view == 'ldsorder' && $layout == 'edit')
        {
            // checkEditId() ist eine Methode von JController, die den Kontext prüft
            if (!$this->checkEditId('com_lds.edit.ldsorders', $id)) {
                // Kommentarlos zurück zur default-view
                $this->setRedirect(JRoute::_('index.php?option=com_lds&view=ldsorders', false));
                return false;
            }
        }

        // Alles geprüft und ok, die View kann ausgegeben werden
        parent::display($cachable, $urlparams);
    }

}
