<?php get_header(); ?>
<section id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">

            <?php if ( have_posts() ) : ?>
                
                <header class="header mt-5 mb-5">
                    
                    <?php get_search_form(); ?>

                    <?php printf( __( 'Risultati per: %s', 'fabtheme' ), get_search_query() ); ?>
                    
                    <?php if (strlen( trim(get_search_query()) ) >= 1 ) { ?>
                        
                        <h3 class='entry-title'><?php printf( __( 'Risultati per: %s', 'fabtheme' ), get_search_query() ); ?></h3>
                        
                
                    <?php } ?>

                </header>

				<div class="widget_category_mansory">
					<div class="card-columns">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('card card-bg'); ?> >
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="card-img-top">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('mansory-thumb', array('class' => 'img-fluid')); ?>
                                        </a>
                                    </div><!--/.post-thumbnail-->
                                <?php   
                                    } 
                                ?>
                                <?php if ( is_sticky() ) { echo '<div class="flag-icon"></div>'; } ?>
                                <div class="card-body">
                                    <div class="category-top">
                                        <strong><?php the_category(', '); ?></strong>
                                        <span class="data"><?php echo get_the_date( 'j M Y' ); ?></span>
                                    </div>
                                    <header class="entry-header">
                                        <?php edit_post_link(); ?>
                                        <?php the_title( '<h5 class="card-title big-heading">', '</h5>' ); ?>
                                    </header><!-- .entry-header -->
                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .entry-summary -->
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="read-more">Leggi di pi&ugrave; &nbsp;<span class="it-arrow-right"></span></a>
                                </div>
                            </article><!-- #post-## -->
						<?php endwhile; endif; ?>
					</div>
				</div>

            
            <?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="header">
                    <h2 class="entry-title"><?php _e( 'Nessun risultato', 'fabtheme' ); ?></h2>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'La ricerca non ha prodotto risultati per i termini utilizzati.', 'fabtheme' ); ?></p>
                    <?php get_search_form(); ?>
                </section>
            </article>
            <?php endif; ?>

            </div>
        </div>
	</div>
</section>

<?php get_footer(); ?>