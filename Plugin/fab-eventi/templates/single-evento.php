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
			
                        $dataDal    = CambiaData($postmetas['fabev_evento_dal'][0]);
                        $dataAl     = CambiaData($postmetas['fabev_evento_al'][0]);
                        $dateRange  = $dataDal .' - '. $dataAl;

                        $contatti = ($postmetas['fabev_evento_contatti'][0]) ? $postmetas['fabev_evento_contatti'][0] : 'nessuno';

                        $indirizzo = ($postmetas['fabev_evento_indirizzo'][0]) ? $postmetas['fabev_evento_indirizzo'][0] : 'nessuno';

                        $tipoMain = get_the_terms(get_the_ID(), 'evento_category');			
                        
                        $localitaMain       = get_the_title($postmetas['fabev_evento_localita'][0]);
                        $localitaMainLink   = '<a href="'. get_permalink($postmetas['fabev_evento_localita'][0]) .'">'. $localitaMain .'</a>';
                        $localitaProvincia  = get_post_meta($postmetas['fabev_evento_localita'][0], 'fabev_localita_provincia', true);

                        $eventoTarget = $postmetas['fabev_evento_target'][0];

                        $eventoId = get_the_ID();

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
                                                <td><?php echo $localitaMainLink; ?> - <?php echo $localitaProvincia; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Indirizzo</th>
                                                <td><?php echo $indirizzo; ?></td>
                                            </tr>

                                            <tr>
                                                <th>Tipo</th>
                                                <td><?php echo $tipoMain[0]->name; ?></td>
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
                                                        'terms'     => $tipoMain[0]->slug
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

                                <div class="row" id="pubblicita">
                                    <div class="row">
                                        <?php
                                            
                                            $args = array(
                                                'post_type'         => 'pubblicita',
                                                'post_status'       => 'publish'
                                            );

                                            $query = new WP_Query($args);

                                            if ($query->have_posts()):

                                                $oggi = date('Y-m-d');

                                                
                                                while ( $query->have_posts() ) :
                                                    // This modifies the $post global.
                                                    $query->the_post();
                                                    $postmetasPubblicita = get_post_meta(get_the_ID());

                                                    $mostraPubblicita = [];

                                                    // verifico il range di date
                                                    if ($postmetasPubblicita['fabev_pubblicita_dal']){

                                                        $mostraPubblicita['fabev_pubblicita_dal'] = ($postmetasPubblicita['fabev_pubblicita_dal'][0] <= $oggi ) ? true : false;
                                                        
                                                    }

                                                    if ($postmetasPubblicita['fabev_pubblicita_al']){

                                                        $mostraPubblicita['fabev_pubblicita_al'] = ($postmetasPubblicita['fabev_pubblicita_al'][0] >= $oggi ) ? true : false;

                                                    }

                                                    // verifico il tipo di evento
                                                    if ($postmetasPubblicita['fabev_pubblicita_evento_specifico']){

                                                        $mostraPubblicita['fabev_pubblicita_evento_specifico'] = ($postmetasPubblicita['fabev_pubblicita_evento_specifico'][0] == $eventoId ) ? true : false;

                                                    }

                                                    // verifico il target evento
                                                    if ($postmetasPubblicita['fabev_pubblicita_evento_target']){

                                                        $mostraPubblicita['fabev_pubblicita_evento_target'] = ($postmetasPubblicita['fabev_pubblicita_evento_target'][0] == $eventoTarget ) ? true : false;
                                                        
                                                    }
                                                    
                                                    // verifico la provincia
                                                    if ($postmetasPubblicita['fabev_pubblicita_provincia']){
                                                        
                                                        $mostraPubblicita['fabev_pubblicita_provincia'] = ($postmetasPubblicita['fabev_pubblicita_provincia'][0] == $localitaProvincia ) ? true : false;
                                                    }
                                                    
                                                    // se non ho nessuna condizione false mostro la pubblicità
                                                    if (!in_array(false, $mostraPubblicita)){

                                                        ?>
                                                            <div class="col-md-3 card">
                                                                <?php if (has_post_thumbnail()) : ?>
                                                                    <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); ?>
                                                                <?php endif; ?>
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                                                    <p class="card-text"><?php the_content(); ?></p>
                                                                    <?php if ($postmetasPubblicita['fabev_pubblicita_link']) : ?>
                                                                        <a href="<?php echo $postmetasPubblicita['fabev_pubblicita_link'][0]; ?>" class="btn btn-primary">Scopri di più</a>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        
                                                    }
                                                    ?> 
                                                    
                                                <?php endwhile; ?>
                                                
                                                
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