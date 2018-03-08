<div class="container d-flex justify-content-center">
	<div class="blog-post">
		<?php the_content(); 
			the_post_thumbnail();
			get_permalink($post->ID);
		?>
	</div>
</div>


