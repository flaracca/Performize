<?php

/*
** Lista Martial Arts
*/
function api_fabev_getEventi($data){
    
        
        $arr = [];

        mostra_array($data);
        
        return new WP_REST_Response(
            array(
                'status' => 200,
                'response' => $arr
            )
        );

    if(true){
    } else {

        return new WP_REST_Response(
            array(
                'status' => 400
            )
        );
    }

    
}


?>