<div class="hic-partners">
        <div class="partnersTitle">
            <h2>Nos partenaires</h2>
        </div>
    <div class="container d-flex justify-content-center flex-wrap align-items-center">
        <div class="hicList">
            <?php
            global $hicPartners;
            while ( $hicPartners->have_posts() ) : 
                $hicPartner = $hicPartners->the_post();
                $hicPartnerCF = get_post_custom($hicPartner); ?>
                    <a href="<?= $hicPartnerCF["Website"][0] ?>">
                        <img src="<?= replaceStrFromCloudinaryforHICPartners($hicPartnerCF["logoNormal"][0]); ?>" alt="HappyTech International Committee Partner">
                    </a>
            <?php 
            endwhile; 
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>