<?php

/*
** Hide admin bar for logged in users
*/
add_filter( 'show_admin_bar', '__return_false' );

/**
 * Redirect to dashboard page after logging IN into the site.
 *
 * @since   1.0
 */

function ITLFfn_login_redirect( $redirect_to, $request, $user  ) {

  return site_url('/dashboard/');

}

add_filter( 'login_redirect', 'ITLFfn_login_redirect', 10, 3 );

/**
 * Redirect to dashboard page after logging OUT into the site.
 *
 * @since   1.0
 */

function ITLFfn_logout_redirect(   ) {

    wp_redirect( site_url('/dashboard/') );
    exit();
  
}
  
add_filter( 'wp_logout', 'ITLFfn_logout_redirect', 10, 3 );


//add_action( "template_redirect", "ITLFfn_ActivityAdd" );
add_action( "get_footer", "ITLFfn_ActivityAdd" );
?>