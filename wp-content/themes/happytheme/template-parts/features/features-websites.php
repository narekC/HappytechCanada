<div id="htSites" style="background-color: #212c35">
    <div class="htText">
        <h2>Retrouvez nos implantations locales</h2>
    </div>
    <div class="container d-flex justify-content-center flex-wrap align-items-center">
        <div class="htLocation">
        <?php 
            // FUNCTION TO GET SPECIFIC CPT CUSTOM FIELD
            global $htWebsites;
            while ( $htWebsites->have_posts() ): 
                $htWebsite = $htWebsites->the_post();
                $htWebsiteCF = get_post_custom($htWebsite); ?>
                        <a href="<?=$htWebsiteCF["Website"][0]?>" target="_blank">
                            <?= the_post_thumbnail() ?>
                        </a>
            <?php 
            endwhile;
            wp_reset_postdata();
        ?>
        </div>
    </div>
</div>