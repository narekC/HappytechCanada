<div class="container">
	<div class="blog-post">
		<?php 
			the_content(); 
			the_post_thumbnail();
			get_permalink($cat);
		?>
	</div>
</div>


