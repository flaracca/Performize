<?php
/**
 * Plugin Name: Esercizio 1
 * Plugin URI: ---
 * Description: bla1
 * Version: 1.0.0
 * Author: Fabrizio La Racca
 * Author URI: https://laracca.it
 * Text Domain: esercizio 
 */

/*
	Richiesta 1: creare un plugin che aggiunge in fondo all'articolo il numero di parole contenuto nell'articolo stesso

	Richiesta 2: Aggiungere un campo personalizzatonegli articoli che permette all'admin di specificare una parola di sua scelta. 
	Quando questo campo è valorizzato, in fondo all'articolo viene stampato il numero di volte che compare questa parola invece 
	del numero di parole complessino.

	Richiesta 3: Stampare nel log di Query Monitor quale tra le casistiche 1 e 2 si è verificata.
*/


defined ('ABSPATH') or die ('It seems you tried to reach me the wrong way...');

if ( !function_exists('add_action')){

	echo 'Wordpress hasn\'t initalized properly';
	exit;
}


require_once plugin_dir_path( __FILE__ ) . '/hooksFilters.php';
require_once plugin_dir_path( __FILE__ ) . '/funzioni.php';

?>