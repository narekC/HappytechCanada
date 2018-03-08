<?php get_header(); ?>

<div class="page-content">

	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
			get_template_part( 'content-single', get_post_format() );
  
		endwhile; endif; 
	?>

	</div>

<?php 
if (isGlobalSite()) :
	get_template_part('template-parts/footer/footer', 'contact');
endif;
get_footer(); ?>