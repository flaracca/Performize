<footer class="entry-footer">
	<h6><span>Categoria</span> <?php the_category( ', ' ); ?></h6>
	
    <span class="tag-links"><?php the_tags(); ?></span>
	
</footer> 

<section class="entry-meta">
	<p><small><?php the_time( get_option( 'date_format' ) ); ?></small></p>
	<span class="meta-sep"> | </span>
	<span class="author vcard"><?php the_author_posts_link(); ?></span>
</section>