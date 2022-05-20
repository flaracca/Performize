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
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/class-main.php' );

    
    /* HOOKS */
    $cartella = '/backend/hooks';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/hooks.php' );
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/menu.php' );

    $cartella = '/frontend/hooks';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/hooks.php' );
    
    /* ACTIONS */
    $cartella = '/backend/actions';
    require_once( plugin_dir_path( __FILE__ ) . $cartella . '/action-cmb2.php' );
    

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