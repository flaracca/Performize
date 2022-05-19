<?php
// Template Name: Template No SB e Ft
get_header();
//get_template_part('header', 'banner');
?>
    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <?php the_post(); ?>
           
                    <h4 class="classic-title"><span><?php the_title(); ?></span></h4>
                    <?php the_content(); ?>
                   
        </div>
    </div>
    <!-- End Content -->
<?php get_footer(); ?>