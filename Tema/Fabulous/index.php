<?php get_header(); ?>
<section id="content" role="main" class="container">
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : 
                
                the_post(); 
                
                get_template_part( 'template-parts/content-single' );
    
            endwhile; 
        
        endif; 
    ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>