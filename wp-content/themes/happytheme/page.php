<?php get_header(); ?>

<div class="content">

	<?php 
		$post_id = get_the_ID();
		$cat = get_the_category($post_id);
		query_posts("cat={$cat[0]->cat_ID}"); 
		while (have_posts()) : the_post();
			get_template_part('content-single', get_post_format());
		endwhile;
		wp_reset_query();
	?>

</div>

<?php 
    if(isGlobalSite()) :
        get_template_part('template-parts/footer/footer', 'contact');
    endif;

get_footer(); ?>