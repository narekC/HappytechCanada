<div class="happytechfr-partners">
    <div class="partnersTitle">
        <h2>Nos membres-partenaires</h2>
    </div>
    <div class="container">
        <div class="sliderP">
            <?php
                global $entreprises;
                while ( $entreprises->have_posts() ) : 
                    $entreprise = $entreprises->the_post();
                    $entrepriseCF = get_post_custom($entreprise);
                    if (has_category('partners')) : ?>
                        <div class="slides-partners">
                            <img src="<?= replaceStrFromCloudinaryforPartners($entrepriseCF["logoNormal"][0]); ?>" alt="HappyTech Partner">
                        </div>
                    <?php
                    endif;
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</div>
