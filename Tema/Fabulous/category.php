<?php get_header(); 
fabt_archive_enqueue();
?>
<section id="content" role="main" class="container">
    <div class="container">
        <div class="row">
            <div class="col">

                <header class="header mt-5">
                    <h3 class="entry-title">
                        Categoria</h3>
                </header>

                <div class="widget_category_mansory">
                        <div class="card-columns">
                            <?php 
                                if ( have_posts() ) : 
                                    while ( have_posts() ) : 
                                        the_post(); ?>
                                            <?php get_template_part( 'template-parts/content-category' ); ?>
                            <?php 
                                    endwhile; 
                                
                                endif; ?>
                        </div>
                </div>

            </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>