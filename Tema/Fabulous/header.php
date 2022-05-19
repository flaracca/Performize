<!doctype html>
<html <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
    </head>

    <body>
        <main>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse justify-content-md-center">
                                <?php 
                                    if ( has_nav_menu( 'primary' ) ) {
                                        wp_nav_menu(
                                            array( 
                                                'theme_location' => 'primary',
                                                'depth'         => 2, 
                                                'container'     => 'ul', 
                                                'menu_class'    => 'navbar-nav',                                                
                                                'walker'        => new WP_Bootstrap5_Navwalker(),
                                            )
                                        );
                                    }
                                ?>
                        </div>
                    </div>
                </nav>
            </header>

            <div id="container">
