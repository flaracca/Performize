<?php
/*
** CSS, JS, Library Enqueuing
*/

function fn_FABEVfn_enqueue_default(){
    
    FABEVfn_select2_enqueue();
    FABEVfn_popperJs_enqueue();
    FABEVfn_bootstrap_enqueue();
    FABEVfn_fontawesome_enqueue();
    FABEVfn_inputfit_enqueue();
    FABEVfn_mpu_enqueue();
    FABEVfn_common_features_enqueue();
}

/*
** JQUERY 3.5.1
*/
function FABEVfn_jquery_enqueue(){
		
    wp_enqueue_script('FABEVfn_jquery_js_01');
    //wp_enqueue_script('FABEVfn_jquery_js_02');
}

/*
** BOOTSTRAP 4
*/
function FABEVfn_bootstrap_enqueue(){
		
    wp_enqueue_style('FABEVfn_bootstrap_css_01');
    //wp_enqueue_script('FABEVfn_bootstrap_js_01');
    //wp_enqueue_script('FABEVfn_popperJs_js_01');
    wp_enqueue_script('FABEVfn_bootstrap_js_02');
    
}

/*
** FONTAWESOME 5
*/
function FABEVfn_fontawesome_enqueue(){
		
    wp_enqueue_script('FABEVfn_fontawesome_js_01');
    
}

/*
** INPUTFIT
*/
function FABEVfn_inputfit_enqueue(){
    wp_enqueue_script('FABEVfn_inputfit_js_01');
}

/*
** DATATABLES
*/
function FABEVfn_datatable_enqueue(){
	
    wp_enqueue_script('FABEVfn_dt_js_dt_01');
    wp_enqueue_script('FABEVfn_dt_js_dt_02');
    wp_enqueue_script('FABEVfn_dt_js_dt_03');
    
    //wp_enqueue_script('FABEVfn_dt_js_b4_01');
    //wp_enqueue_script('FABEVfn_dt_js_b4_02');
    
    wp_enqueue_script('FABEVfn_dt_js_dt_04');
    wp_enqueue_script('FABEVfn_dt_js_dt_05');

    //wp_enqueue_script('FABEVfn_dt_js_fd_01');
    
    wp_enqueue_style('FABEVfn_dt_css_dt_01');
    wp_enqueue_style('FABEVfn_dt_css_dt_02');
    wp_enqueue_style('FABEVfn_dt_css_dt_03');
    /*
    wp_enqueue_style('FABEVfn_dt_css_b4_01');
    wp_enqueue_style('FABEVfn_dt_css_b4_02');
    wp_enqueue_style('FABEVfn_dt_css_b4_03');
    */
    //wp_enqueue_style('FABEVfn_dt_css_dt_04');
    //wp_enqueue_style('FABEVfn_dt_css_dt_05');

    //wp_enqueue_style('FABEVfn_dt_css_fd_01');
}

/*
** MOMENT
*/
function FABEVfn_moment_enqueue(){
		
    wp_enqueue_script('FABEVfn_moment_js_01');
    wp_enqueue_script('FABEVfn_moment_js_02');
    
}

/*
** PHPGRID
*/
function FABEVfn_phpgrid_enqueue(){
		
    wp_enqueue_script('FABEVfn_phpgrid_js_01');
    wp_enqueue_script('FABEVfn_phpgrid_js_02');
    wp_enqueue_script('FABEVfn_phpgrid_js_03');
    
    wp_enqueue_style('FABEVfn_phpgrid_css_01');
    
}

/*
** POPUP
*/
function FABEVfn_mpu_enqueue(){
		
    wp_enqueue_script('FABEVfn_mpu_js_01');
    
    wp_enqueue_style('FABEVfn_mpu_css_01');
    
}



/*
** SELECT2 4.1.0
*/
function FABEVfn_select2_enqueue(){
		
    wp_enqueue_script('FABEVfn_select2_js_01');
    
    wp_enqueue_style('FABEVfn_select2_css_01');
    
}

/*
** COLOR PICKER
*/
function FABEVfn_colorpicker_enqueue(){
		
    wp_enqueue_script('FABEVfn_colorpicker_js_01');
    
    wp_enqueue_style('FABEVfn_colorpicker_css_01');
    
}

/*
** TIME PICKER (LIKE GOOGLE)
*/
function FABEVfn_timepicker_enqueue(){
		
    wp_enqueue_script('FABEVfn_timepicker_js_01');
    
    wp_enqueue_style('FABEVfn_timepicker_css_01');
    
}

/*
** FILE UPLOADER
*/
function FABEVfn_fileuploader_enqueue(){
		
    wp_enqueue_script('FABEVfn_fileuploader_js_01');
    wp_enqueue_script('FABEVfn_fileuploader_js_02');
    
    wp_enqueue_style('FABEVfn_fileuploader_css_01');
    
}

/*
** COMMON FEATURES
*/
function FABEVfn_common_features_enqueue(){
		
    wp_enqueue_script('FABEVfn_common_features_js_01');

    wp_enqueue_script('FABEVfn_common_features_js_02');
    
    wp_enqueue_style('FABEVfn_common_features_css_01');

    wp_enqueue_script('FABEVfn_btdialog_js_01');
    
}

/*
** JQUERY MOBILE
*/
function FABEVfn_jqm_enqueue(){
		
    wp_enqueue_script('FABEVfn_jqm_js_01');
    wp_enqueue_script('FABEVfn_jqm_js_02');
    
    wp_enqueue_style('FABEVfn_jqm_css_01');
    
}

/*
** SLIDER
*/
function FABEVfn_slider_enqueue(){
		
    wp_enqueue_script('FABEVfn_slider_js_01');

    wp_enqueue_style('FABEVfn_slider_css_01');
    
}

/*
** GRAPH.JS
*/
function FABEVfn_graph_enqueue(){
		
    wp_enqueue_script('FABEVfn_graph_js_01');
	wp_enqueue_script('FABEVfn_graph_js_02');
	
	wp_enqueue_style('FABEVfn_graph_css_01');
    
}

/*
** JQUERY TABS
*/
function FABEVfn_jTabs_enqueue(){
        
    wp_enqueue_script('FABEVfn_jTabs_js_01');
    wp_enqueue_script('FABEVfn_jTabs_js_02');
    
    wp_enqueue_style('FABEVfn_jTabs_css_01');
    
}

/*
** PRINTJS
*/
function FABEVfn_printJ_enqueue(){
        
    wp_enqueue_script('FABEVfn_printJs_js_01');
    
    wp_enqueue_style('FABEVfn_printJs_css_01');
    
}

/*
** BOOTSTRAP DIALOG JS
*/
function FABEVfn_bootstrapDialog_enqueue(){
        
    wp_enqueue_script('FABEVfn_btdialog_js_01');
    
}

/*
** POPPER JS
*/
function FABEVfn_popperJs_enqueue(){
        
    wp_enqueue_script('FABEVfn_popperJs_js_01');
    
}


?>