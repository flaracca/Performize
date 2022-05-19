<?php

    /*
    ** LIBRARIES
    ** Load them before any other class
    */
    $cartella = '/lib';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/cmb2.php' );
    /*
    ** CLASSES
    */

    $cartella = '/includes';
    /* CORE START */
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/class-main.php' );
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/class-constants.php' );
	require_once( plugin_dir_path( __FILE__ ) . $cartella . '/class-hooks.php' );	
    /* CORE END */


    /*
    ** HOOKS
    */
    /* CORE START */
    $cartella = '/backend/hooks';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/hooks.php' );
    $cartella = '/frontend/hooks';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/hooks.php' );

    

    /*
    ** FUNCTIONS
    */
    /* CORE START */
    $cartella = '/includes/functions';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/functions-enqueue.php' );
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/functions-register.php' );
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/functions.php' );
    /* CORE END */



    
    
?>