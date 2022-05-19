<?php

if ( !function_exists('mostra_array')){
    
    function mostra_array($arr = array(), $txt = ''){

        echo '<pre>';
        
        echo '<b>'. $txt .'</b><br>';
        print_r($arr);
        
        echo '</pre>';
        
        echo '<hr>';
    }

}

if ( !function_exists('myecho')){
    
    function myecho($txt = '', $line = ''){

        echo '<br> <b>' . $line . '</b> )' . $txt;
        
    }

}


if (!function_exists('fn_qmLog')){

    function fn_qmLog($hook, $msg) : void{

        // verifico che Query Monitor sia attivato

        if ( defined( 'QM_VERSION' ) ) {
            do_action($hook, $msg);
        }
        
    }
}

function GetPostsArray($postType) : array {
    
    $arr = [];

    $args = array(
        'post_type' => $postType
    );

    $query = new WP_Query( $args );

    foreach( $query->posts as $post ) { 
        
        $arr[$post->ID] = $post->post_title;
    }
    
    asort($arr);
    return $arr;
}

function GetCategoriesArray($postType) : array {
    
    $arr = [];

    $args = array (
            'taxonomy' => $postType . '_category',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false
    );
    
    $query = get_terms($args);
    

    foreach( $query as $term ) { 
        
        $arr[$term->term_id] = $term->name;
    }

    asort($arr);
    
    return $arr;
}

function GetProvince() : array {

    $arr = [];

    $arr['IM'] = 'Imperia';
    $arr['SV'] = 'Savona';
    $arr['GE'] = 'Genova';
    $arr['SP'] = 'Spezia';

    return $arr;
}

?>