<?php
add_action('admin_menu', 'FABEV_admin_pages');
function FABEV_admin_pages(){
    
    $page_title = 'Fab Eventi';
    $menu_title = $page_title;
    $capability = 'edit_posts';
    $menu_slug = 'FABEV';

    
    //$pageHook[] = add_menu_page( $page_title, $menu_title, $capability, $menu_slug, 'INSIDEDOCS_admin_page', plugin_dir_url( dirname( __FILE__, 2) ) . 'images/logo_menu.png' , 110 );
    $pageHook[] = add_menu_page( $page_title, $menu_title, $capability, $menu_slug, 'FABEV_admin_page', plugin_dir_url( dirname( __FILE__, 2) ) . 'images/happy-face_24x24.png', 110 );
    
	//$pageHook[] = add_submenu_page($menu_slug, __('NomePagina', 'ITLFdomain'), __('NomePagina', 'ITLFdomain'), $capability, 'hk-ITLF-admin-subpage' ,'ITLF_admin_subpage');
	
}
function FABEV_admin_page(){ include(FABEV_DIR . 'backend/templates/admin.php'); }
//function FABEV_admin_subpage(){ include(ITLF_DIR . 'backend/templates/admin_subpage.php'); }

/*
 * Custom links in plugins page
*/
$pluginName = plugin_basename(__FILE__);
add_filter("plugin_action_links", 'FABEV_add_links', 10, 2);

function FABEV_add_links($links, $plugin_file){
    if ( basename( FABEV_DIR ) . '/start.php' === $plugin_file ) {

        $setting_link = '<a href="admin.php?page=FABEV">'. __('Impostazioni', 'fabeventi') .'</a>';
        array_push( $links, $setting_link);

    }

    return $links;
}