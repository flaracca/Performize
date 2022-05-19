<?php


/*
** Lista Utenti
*/
function fnXYZ_getB2Busers(){
	
	global $wpdb;
	
	$sql = 'SELECT DISTINCT user_id FROM '. $wpdb->prefix .'usermeta WHERE meta_key = "'. $wpdb->prefix .'capabilities" AND (meta_value LIKE "%customer%" OR meta_value LIKE "%b2bwhs_role_197%")';
	
	$res = $wpdb->get_results($sql);
	
	$arr = [];
	
	if ($res){
			
		foreach($res as $val){
			
			$arr[$val->user_id] = fnXYZ_GetUserMeta($val->user_id);
		}
	}
	
	return new WP_REST_Response(
        array(
            'status' => 200,
            'response' => $arr
        )
    );
}

function fnXYZ_getB2BusersShort(){
	
	global $wpdb;
	
	$sql = 'SELECT DISTINCT m1.user_id,
			(SELECT meta_value FROM '. $wpdb->prefix .'usermeta WHERE user_id = m1.user_id AND meta_key = "billing_company") AS billing_company,
			(SELECT meta_value FROM '. $wpdb->prefix .'usermeta WHERE user_id = m1.user_id AND meta_key = "importatoInGestionale") AS importatoInGestionale
			FROM '. $wpdb->prefix .'usermeta m1
			WHERE 
			m1.meta_key = "'. $wpdb->prefix .'capabilities" AND (m1.meta_value LIKE "%b2bwhs_role_197%")';
	
	$res = $wpdb->get_results($sql);
	
	$arr = [];
	
	if ($res){
			
		foreach($res as $val){
			
			if($val->importatoInGestionale != 'si'){
				$arr[$val->user_id] = ['id' => $val->user_id, 'ragioneSociale' => $val->billing_company];
			}
			
		}
	}
	
	return new WP_REST_Response(
        array(
            'status' => 200,
            'response' => $arr
			,'sql' => $sql
        )
    );
}

function fnXYZ_getB2Buser($data){
	
	$id = $data['id'];
	
	$arr = fnXYZ_GetUserMeta($id);
	
	return $arr;
}




?>