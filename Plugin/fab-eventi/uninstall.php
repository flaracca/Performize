<?php

/*
* Trigger this file on Plugin Uninstall
*
* @package PCGFABEV
*/

if ( ! defined('WP_UNINSTALL_PLUGIN')){
	die;
}

// Clear Database stored data
global $wpdb;