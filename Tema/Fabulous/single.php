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

                        get_template_part( 'template-parts/content-single' );
            ?>
            
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