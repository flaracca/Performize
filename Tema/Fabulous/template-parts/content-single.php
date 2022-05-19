<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		
        <?php if ( !is_search() ) get_template_part( 'template-parts/footer-single' ); ?>

		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h4 class="entry-title">'; } ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
		<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h4>'; } ?>

        <?php edit_post_link(); ?>
	</header>

    <div class="container">
        <div class="row">
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="col-md-3">
                    <?php the_post_thumbnail('single-post-thumbnail');  ?>
                </div>

                <div class="col-md-9">
            <?php else : ?>

                <div class="col-md-12">

            <?php endif; ?>
        
        
            <?php if ( is_singular() ) : ?>

                <?php the_content(); ?>

            <?php else : ?>

                <?php the_excerpt(); ?>

            <?php endif; ?>

                
        </div>
        

        </div>
</article>