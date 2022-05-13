<?php
/**
 * Plugin Name: Esercizio 2
 * Plugin URI: ---
 * Description: bla1
 * Version: 1.0.0
 * Author: Fabrizio La Racca
 * Author URI: https://laracca.it
 * Text Domain: esercizio 
 */

/*
	Creare un plugin che aggiunge nell'<head> del sito la favicon.
	Per convenzione ipotizziamo che la favicon sia sempre presente nella root del sito Wordpress.
*/


defined ('ABSPATH') or die ('It seems you tried to reach me the wrong way...');

if ( !function_exists('add_action')){

	echo 'Wordpress hasn\'t initalized properly';
	exit;
}

require_once plugin_dir_path( __FILE__ ) . '/hooksFilters.php';

?>