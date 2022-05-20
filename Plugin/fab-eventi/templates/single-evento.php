<?php get_header(); ?>
<section id="content" role="main" class="container mt-4 mb-4">
    <div class="container">
        <div class="row">

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div class="col-md-7">
        <?php else : ?>
            <div class="col-md-12">
        <?php endif; ?>

            <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post(); 
                        $postmetas = get_post_meta(get_the_ID());
			
                        $dataDal = CambiaData($postmetas['fabev_evento_dal'][0]);
                        $dataAl = CambiaData($postmetas['fabev_evento_al'][0]);
                        $dateRange = $dataDal .' - '. $dataAl;

                        $contatti = ($postmetas['fabev_evento_contatti'][0]) ? $postmetas['fabev_evento_contatti'][0] : 'nessuno';

                        $indirizzo = ($postmetas['fabev_evento_indirizzo'][0]) ? $postmetas['fabev_evento_indirizzo'][0] : 'nessuno';

                        $tipo = get_the_terms(get_the_ID(), 'evento_category');			
                        
                        $localita = get_the_title($postmetas['fabev_evento_localita'][0]);
                        $localitaLink = '<a href="'. get_permalink($postmetas['fabev_evento_localita'][0]) .'">'. $localita .'</a>';
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                
                                <?php the_title('<h1>', '</h1>'); ?>

                            </header>

                            <div class="container">
                                <div class="row">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="col-md-4">
                                            <?php the_post_thumbnail('single-post-thumbnail');  ?>
                                        </div>

                                        <div class="col-md-8">
                                    <?php else : ?>

                                        <div class="col-md-12">

                                    <?php endif; ?>

                                    <?php the_content(); ?>

                                    </div>        
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2>Informazioni Evento</h2>
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>Contatti</th>
                                                <td><?php echo $contatti; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Date</th>
                                                <td><?php echo $dateRange; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Località</th>
                                                <td><?php echo $localitaLink; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Indirizzo</th>
                                                <td><?php echo $indirizzo; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Tipo</th>
                                                <td><?php echo $tipo[0]->name; ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col">
                                        <h2>Altri Eventi simili</h2>
                                        
                                        <?php
                                            
                                            $args = array(
                                                'post_type'         => 'evento',
                                                'post_status'       => 'publish',
                                                'tax_query'         => array(
                                                    array(
                                                        'taxonomy'  => 'evento_category',
                                                        'field'     => 'slug',
                                                        'terms'     => $tipo[0]->slug
                                                    )
                                                )
                                            );

                                            $query = new WP_Query($args);

                                            if ($query->have_posts()):

                                                $oggi = date('Y-m-d');

                                                
                                                while ( $query->have_posts() ) :
                                                    // This modifies the $post global.
                                                    $query->the_post();
                                                    $postmetasAltri = get_post_meta(get_the_ID());

                                                    $dataDal = CambiaData($postmetasAltri['fabev_evento_dal'][0]);
                                                    $dataAl = CambiaData($postmetasAltri['fabev_evento_al'][0]);
                                                    $dateRange = $dataDal .' - '. $dataAl;

                                                    $localita = get_the_title($postmetasAltri['fabev_evento_localita'][0]);
                                                    $localitaLink = '<a href="'. get_permalink($postmetasAltri['fabev_evento_localita'][0]) .'">'. $localita .'</a>';

                                                    if ($oggi > $dataAl){

                                                        $eventiPassati .= '<li>
                                                                                <a href="'. get_permalink(get_the_ID()) .'" title="'. the_title_attribute('echo=0') .'" rel="bookmark">'. the_title('', '', false) .'</a><br>
                                                                                '. $localitaLink .' - '. $dateRange .'
                                                                            </li>';

                                                    }

                                                    if ($oggi <= $dataDal){

                                                        $eventiFuturi .= '<li>
                                                                                <a href="'. get_permalink(get_the_ID()) .'" title="'. the_title_attribute('echo=0') .'" rel="bookmark">'. the_title('', '', false) .'</a><br>
                                                                                '. $localitaLink .' - '. $dateRange .'
                                                                            </li>';

                                                    }
                                                    ?> 
                                                    
                                                <?php endwhile; ?>
                                                
                                                <h3>Eventi Futuri</h3><?php echo $eventiFuturi; ?>

                                                <h3>Eventi Passati</h3><?php echo $eventiPassati; ?>
                                            <?php endif;

                                            // Restore the $post global back to the current post in the main query.
                                            wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                        </article>
            
            <?php 
                    endwhile; 
                    
                endif; 
                
            ?>
        </div>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div class="col-md-4 offset-md-1">
            <?php get_sidebar(); ?>
        </div>
        <?php endif; ?>
        
        
        </div>
    </div>

</section>
<?php get_footer(); ?>