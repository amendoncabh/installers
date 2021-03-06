<?php
/**
* Core file.
*
* @author Vince Wooll <sales@jomres.net>
*
 * @version Jomres 9.9.9
 *
* @copyright	2005-2013 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
**/
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

if (isset($_REQUEST ['layout'])) {

    switch ($_REQUEST ['layout']) {
        case 'countries':
			$_REQUEST ['task'] = 'search';
			$_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';
            $_REQUEST ['country'] = $_REQUEST ['selected_country'];
            break;
        case 'regions':
			$_REQUEST ['task'] = 'search';
			$_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';
            $_REQUEST ['region'] = (int)$_REQUEST ['selected_region'];
            break;
        case 'towns':
			$_REQUEST ['task'] = 'search';
			$_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';
            $_REQUEST ['town'] = $_REQUEST ['selected_town'];
            break;
        case 'propertytypes':
			$_REQUEST ['task'] = 'search';
			$_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';
            $_REQUEST ['ptype'] = (int)$_REQUEST ['selected_ptype'];
            break;
		case 'propertydetails':
			$_REQUEST ['task'] = 'viewproperty';
            $_REQUEST ['property_uid'] = $_REQUEST ['selected_property'];
            break;
		case 'propertycategories':
			$_REQUEST ['task'] = 'search';
            $_REQUEST ['calledByModule'] = 'mod_jomsearch_m0';
            $_REQUEST ['cat_id'] = (int)$_REQUEST ['selected_category'];
            break;
        default:
            break;
        }
}

if (!defined('JOMRES_ROOT_DIRECTORY')) {
    if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
        require_once dirname(__FILE__).'/../../jomres_root.php';
    } else {
        define('JOMRES_ROOT_DIRECTORY', 'jomres');
    }
}

require_once dirname(__FILE__).'/../../'.JOMRES_ROOT_DIRECTORY.'/jomres.php';
