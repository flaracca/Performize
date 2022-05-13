<?php

add_action( 'wp_head', 'es02_favicon' );

function es02_favicon(){
	
	?> 
        <link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.png" > 
    <?php
    
}
