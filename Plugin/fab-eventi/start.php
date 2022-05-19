<?php
/**
 * Plugin Name: Fab Eventi
 * Plugin URI: ---
 * Description: Gestore Eventi
 * Version: 1.0.0
 * Author: Fabrizio La Racca
 * Text Domain: fabeventi
 *
 * @package PCGFABEV
 */

 /**
 * Sets translator string
 *
 * @since   1.0
 */

/*
** string to be replaced
**
** FABEV 
** FABEVfn
*/

defined ('ABSPATH') or die ('It seems you tried to reach me the wrong way...');

if ( !function_exists('add_action')){

	echo 'Wordpress hasn\'t initalized properly';
	exit;
}

// FABEVdomain
if ( ! defined( 'textdomain' ) ) {
	define( 'textdomain', 'fabeventi' );
}

add_action('plugins_loaded', 'FABEV_load_textdomain');
function FABEV_load_textdomain() {
	$load_text_domain = load_plugin_textdomain( 'fabeventi', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

require_once dirname( __FILE__ ) . '/autoload.php';

if ( ! defined( 'FABEV_VERSION' ) ) {
            define( 'FABEV_VERSION', '1.0.0' );
        }


use FABEV\Main;


add_action( 'wp_loaded', 'fn_FABEV' );
//add_action( 'plugins_loaded', 'fn_FABEVfnFABEV' );
/*
** Hooked on wp_loaded because otherwise wp_insert_post throws error:
** fatal error get_page_permastruct()
*/
function fn_FABEV() {
    
    
    $plugin = new FABEV();
	
	return $plugin->instance();

    
}



?>