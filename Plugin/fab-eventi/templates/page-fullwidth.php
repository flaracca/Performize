<?php 
   /* Template Name: Pagina full-width */
   get_header(); 
?>
<section id="content" role="main">
   
      <div class="row">

		  <div class="col-12">
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header mt-5">
				   <h1 class="entry-title"><?php the_title(); ?></h1>
				   
				</header>
				<section class="entry-content">
				   
				   <?php the_content(); ?>
				   
				</section>
			 </article>
			 <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			 <?php endwhile; endif; ?>
		  </div>
      
      </div>
	
</section>

<?php get_footer(); ?>