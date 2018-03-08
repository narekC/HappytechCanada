<div class="container">
       <div class="slider">
        <?php
            $presse = new WP_Query( array( 'post_type' => 'presse', 'post_status' => 'publish', 'posts_per_page' => 10 ) );
            while ( $presse->have_posts() ) { 
                $presse->the_post();
//                echo $loop2->post->post_name;
                echo "<div class='presse-slick' style='text-align:center' >";
                // echo "<a href=".get_permalink($post->ID)." target='_blank'>";
                        the_post_thumbnail();
                // echo "</a>";
                echo "</div>";
                };
                wp_reset_postdata();
        ?>
        </div>
</div>