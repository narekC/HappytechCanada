<div class="happytechfr-founders">
    <div id="home"></div>
    <div class="container">
        <div class="slider">
            <?php
                global $entreprises;
                while ( $entreprises->have_posts() ) : 
                    $entreprise = $entreprises->the_post();
                    if (has_category('founders')) : ?>
                        <?php the_post_thumbnail(); ?>
                <?php 
                    endif;
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</div>
