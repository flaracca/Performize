<?php get_header(); ?>
<section id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">

            <?php if ( have_posts() ) : ?>
                <header class="header mt-5 mb-5">
                <?php printf( __( 'Risultati per: %s', 'fabtheme' ), get_search_query() ); ?>
                <?php if (strlen( trim(get_search_query()) ) >= 1 ) { ?>
                    <h3 class='entry-title'><?php printf( __( 'Risultati per: %s', 'fabtheme' ), get_search_query() ); ?></h3>
                    <?php get_search_form(); ?>
                <?php } elseif (strlen( trim(get_search_query()) ) < 1 ) { ?> 
                    <h3 class='entry-title'><?php _e( 'Inserisci un termine per la ricerca: ', 'fabtheme' ); ?></h3>
                    <?php get_search_form(); ?>
                    <hr class="mt-5 pb-5">
                <?php }; ?>
                </header>

				<div class="widget_category_mansory">
					<div class="card-columns">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'entry-dl-card' ); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>

            <?php get_template_part( 'nav', 'below' ); ?>
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