<?php
	
	add_action('rest_api_init', function(){

		//  domainUrl/wp-json/fabev/v1/Eventi
		
		register_rest_route(FABEV_API_ROOT. FABEV_API_VERSION, 'Eventi', [
		
			'methods' => 'POST', // GET or POST
			'callback' => 'api_fabev_getEventi', // name of the function to be called
		]);
		
		
		
		
	});
	
	
	
	
?>