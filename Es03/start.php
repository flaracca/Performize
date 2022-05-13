<?php
/**
 * Plugin Name: Esercizio 3
 * Plugin URI: ---
 * Description: bla1
 * Version: 1.0.0
 * Author: Fabrizio La Racca
 * Author URI: https://laracca.it
 * Text Domain: esercizio 
 */

/*
	Portare il numero di post visualizzati in archivio a 20 solo quando la categoria si chiama "pippo"
*/


defined ('ABSPATH') or die ('It seems you tried to reach me the wrong way...');

if ( !function_exists('add_action')){

	echo 'Wordpress hasn\'t initalized properly';
	exit;
}


add_action( 'pre_get_posts', 'es03_pippoTwenty' );

function es03_pippoTwenty( $query ) {
	
	if ( is_category('pippo')  ) {

		$query->set( 'posts_per_archive_page', 20 );
		
    }
	
}




?>