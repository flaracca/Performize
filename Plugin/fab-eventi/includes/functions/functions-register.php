<?php
/*
** CSS, JS, Library Registration
*/

/*
** JQUERY 3.5.1
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_jquery' );	
function FABEVfn_jquery() {

	//wp_register_script('FABEVfn_jquery_js_01', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'),'3.5.1.0', true);
	//wp_register_script('FABEVfn_jquery_js_01', 'https://code.jquery.com/jquery-1.12.4.js', array('jquery'),'1.12.4.0', true);
	//wp_register_script('FABEVfn_jquery_js_02', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'),'1.12.1.0', true);
    
}

/*
** BOOTSTRAP 4
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_popperJs' );
add_action( 'wp_enqueue_scripts', 'FABEVfn_bootstrap' );	
function FABEVfn_bootstrap() {

	wp_register_style('FABEVfn_bootstrap_css_01', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"',false,'4.5.0.1','all');	

    //wp_register_script('FABEVfn_bootstrap_js_01', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'),'5.0.0', true);
    wp_register_script('FABEVfn_bootstrap_js_02', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'),'5.0.0', true);
    
}

/*
** FONTAWESOME 5
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_fontawesome' );	
function FABEVfn_fontawesome() {

	wp_register_script('FABEVfn_fontawesome_js_01', 'https://kit.fontawesome.com/0efb8dfa6b.js', array('jquery'),'5.0.0', true);
		
}

/*
** INPUTFIT
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_inputfit' );	
function FABEVfn_inputfit() {

	//wp_register_script('FABEVfn_inputfit_js_01', 'https://includi.semplyce.com/inputfit/jquery.inputfit.js', array('jquery'),'1.0.2', true);
		
}

/*
** DATATABLES
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_datatable' );	
function FABEVfn_datatable() {
		
		wp_register_script('FABEVfn_dt_js_dt_01', "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js", array('jquery'),'1.10.22.1', true);		
		wp_register_script('FABEVfn_dt_js_dt_02', "https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js", array('jquery'),'4.1.1.2', true);
		wp_register_script('FABEVfn_dt_js_dt_03', "https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js", array('jquery'),'2.2.6.1', true);
		
		//Bootstrap 4
		//wp_register_script('FABEVfn_dt_js_b4_01', "https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js", array('jquery'),'2.2.6.1', true);
		//wp_register_script('FABEVfn_dt_js_b4_02', "https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js", array('jquery'),'1.10.22.1', true);
		
		//wp_register_script('FABEVfn_dt_js_dt_04', "https://cdn.datatables.net/scroller/2.0.3/js/dataTables.scroller.min.js", array('jquery'),'2.0.3.1', true);
		//wp_register_script('FABEVfn_dt_js_dt_05', "https://cdn.datatables.net/searchbuilder/1.0.1/js/searchBuilder.bootstrap4.min.js", array('jquery'),'1.0.1.1', true);

		// Foundation
		//wp_register_script('FABEVfn_dt_js_fd_01', "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js", array('jquery'),'6.4.3.1', true);

		// Standard DataTable
		
		wp_register_style('FABEVfn_dt_css_dt_01', 'https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',false,'1.10.22.1','all');
		wp_register_style('FABEVfn_dt_css_dt_02', 'https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css',false,'3.1.7.1','all');
		wp_register_style('FABEVfn_dt_css_dt_03', 'https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css',false,'2.2.6.1','all');
		
		
		//Bootstrap 4
		/*
		wp_register_style('FABEVfn_dt_css_b4_01', 'https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css',false,'2.2.6.1','all');
		wp_register_style('FABEVfn_dt_css_b4_02', 'https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css',false, '1.10.22.1','all');
		wp_register_style('FABEVfn_dt_css_b4_03', 'https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap4.min.css',false,'3.1.7.1','all');
		*/
		
		// Foundation
		//wp_register_style('FABEVfn_dt_css_fd_01', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css',false,'6.4.3.1','all');

		//wp_register_style('FABEVfn_dt_css_dt_04', 'https://cdn.datatables.net/scroller/2.0.3/css/scroller.bootstrap4.min.css',false,'2.0.3.1','all');
		//wp_register_style('FABEVfn_dt_css_dt_05', 'https://cdn.datatables.net/searchbuilder/1.0.1/css/searchBuilder.bootstrap4.min.css',false,'1.0.1.1','all');
}

/*
** MOMENT
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_moment' );	
function FABEVfn_moment() {
		
	wp_register_script('FABEVfn_moment_js_01', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js', array('jquery'),'2.26.0.0', true);
	wp_register_script('FABEVfn_moment_js_02', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js', array('jquery'),'2.26.0.0', true);
		
}

/*
** PHPGRID
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_phpgrid' );	
function FABEVfn_phpgrid() {
	/*	
	wp_register_script('FABEVfn_phpgrid_js_01', 'https://includi.semplyce.com/phpgrid/jquery.jqGrid.min.js', array('jquery'),'1.0.0', true);
	wp_register_script('FABEVfn_phpgrid_js_02', 'https://includi.semplyce.com/phpgrid/grid.import.fix.js', array('jquery'),'1.0.0', true);
	wp_register_script('FABEVfn_phpgrid_js_03', 'https://includi.semplyce.com/phpgrid/jquery-ui-timepicker-addon.js', array('jquery'),'1.0.0', true);
				
	wp_register_style('FABEVfn_phpgrid_css_01', 'https://includi.semplyce.com/phpgrid/ui.jqGrid.css',false,'1.0.0','all');
	*/	
}

/*
** POPUP
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_mpu' );	
function FABEVfn_mpu() {
		
	wp_register_script('FABEVfn_mpu_js_01', FABEV_URL . 'lib/custombox/custombox.min.js', array('jquery'),'1.0.2', true);
				
	wp_register_style('FABEVfn_mpu_css_01', FABEV_URL . 'lib/custombox/custombox.min.css',false,'1.0.2','all');
		
}



/*
** SELECT2 4.1.0
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_select2' );	
function FABEVfn_select2() {
		
	wp_register_script('FABEVfn_select2_js_01', FABEV_URL . 'lib/select2/js/select2.full.min.js', array('jquery'),'4.1.0.1', true);
					
	wp_register_style('FABEVfn_select2_css_01', FABEV_URL . '/lib/select2/css/select2.min.css',false,'4.1.0.1','all');
		
}

/*
** COLOR PICKER
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_colorpicker' );	
function FABEVfn_colorpicker() {
		
	wp_register_script('FABEVfn_colorpicker_js_01', FABEV_URL . 'lib/colorpicker/bootstrap-colorpicker.js', array('jquery'),'3.4.0.0', true);
				
	wp_register_style('FABEVfn_colorpicker_css_01', FABEV_URL . 'lib/colorpicker/bootstrap-colorpicker.css',false,'3.4.0.0','all');
		
}

/*
** TIME PICKER (LIKE GOOGLE)
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_timepicker' );	
function FABEVfn_timepicker() {
		
	wp_register_script('FABEVfn_timepicker_js_01', FABEV_URL . 'lib/timepicker/jquery.timepicker.js', array('jquery'),'1.0.3', true);
				
	wp_register_style('FABEVfn_timepicker_css_01', FABEV_URL . 'lib/timepicker/jquery.timepicker.css',false,'1.0.1','all');
		
}

/*
** FILE UPLOADER
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_fileuploader' );	
function FABEVfn_fileuploader() {
		
	wp_register_script('FABEVfn_fileuploader_js_01', FABEV_URL . 'lib/uploadJquery/jquery.uploadfile.min.js', array('jquery'),'1.0.0', true);
	wp_register_script('FABEVfn_fileuploader_js_02', FABEV_URL . 'lib/uploadJquery/jquery.form.min.js', array('jquery'),'1.0.0', true);
				
	wp_register_style('FABEVfn_fileuploader_css_01', FABEV_URL . 'lib/uploadJquery/uploadfile.css',false,'1.0.0','all');
		
}

/*
** COMMON FEATURES
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_common_features' );	
function FABEVfn_common_features() {
		
	wp_register_script('FABEVfn_common_features_js_01', FABEV_URL . 'lib/common-js.js', array('jquery'),'1.0.8', true);

	wp_register_script('FABEVfn_common_features_js_02', FABEV_URL . 'lib/widgetPage-js.js', array('jquery'),'1.0.0.1', true);

	wp_register_style('FABEVfn_common_features_css_01', FABEV_URL . 'lib/common-css.css',false,'1.0.7','all');
		
}

/*
** JQUERY MOBILE
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_jqm' );	
function FABEVfn_jqm() {
		
	wp_register_script('FABEVfn_jqm_js_01', 'http://code.jquery.com/jquery-1.11.1.min.js', array('jquery'),'1.4.5.0', true);
	wp_register_script('FABEVfn_jqm_js_02', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', array('jquery'),'1.4.5', true);
				
	wp_register_style('FABEVfn_jqm_css_01', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css',false,'1.4.5.0','all');
		
}

/*
** SLIDER
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_slider' );	
function FABEVfn_slider() {
		
	wp_register_script('FABEVfn_slider_js_01', FABEV_URL . 'lib/slider/jquery.mb.slider.js', array('jquery'),'1.0.1', true);

	wp_register_style('FABEVfn_slider_css_01', FABEV_URL . 'lib/slider/mb.slider.css',false,'1.0.1','all');

}

/*
** GRAPH.JS
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_graph' );	
function FABEVfn_graph() {

	wp_register_script('FABEVfn_graph_js_01', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js', array('jquery'),'2.9.4.1', true);
	wp_register_script('FABEVfn_graph_js_02', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js', array('jquery'),'2.9.4.0', true);
	
	wp_register_style('FABEVfn_graph_css_01', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css',false,'2.9.4.0','all');
		
}

/*
** JQUERY TABS
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_jTbas' );	
function FABEVfn_jTbas() {

	wp_register_script('FABEVfn_jTabs_js_01', '//code.jquery.com/jquery-1.12.4.js', array('jquery'),'1.12.4.1', true);
	wp_register_script('FABEVfn_jTabs_js_02', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'),'1.12.1.0', true);
	
	wp_register_style('FABEVfn_jTabs_css_01', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',false,'1.12.1.0','all');
		
}

/*
** PRINTJS
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_printJs' );	
function FABEVfn_printJs() {

	wp_register_script('FABEVfn_printJs_js_01', 'https://printjs-4de6.kxcdn.com/print.min.js', array('jquery'),'1.5.0.0', true);
	
	
	wp_register_style('FABEVfn_printJs_css_01', 'https://printjs-4de6.kxcdn.com/print.min.css' ,false,'1.5.0.0','all');
		
}

/*
** BOOTSTRAP DIALOG JS
*/
add_action( 'wp_enqueue_scripts', 'FABEVfn_bootstrapDialog' );	
function FABEVfn_bootstrapDialog() {
		
		//Bootstrap 4
		wp_register_script('FABEVfn_btdialog_js_01', FABEV_URL . 'lib/bootstrap4-dialogs.js', array('jquery'),'1.0.0.4', true);

}

/*
** POPPER JS
*/
	
function FABEVfn_popperJs() {

	wp_register_script('FABEVfn_popperJs_js_01', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'),'1.11.0.0', true);
	//wp_register_script('FABEVfn_popperJs_js_01', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'),'2.10.2.1', true);
		
}


?>