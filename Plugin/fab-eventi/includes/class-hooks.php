<?php


final class Hookings{
	

	public static function wp_hooks(){

	}

	public static function woo_hooks(){

	}

	public static function wp_filters(){

	}

	public static function woo_filters(){

	}

	public static function dashboard_menu(){

		add_action('admin_menu', 'FABEV_admin_pages');
		

	}
}
?>