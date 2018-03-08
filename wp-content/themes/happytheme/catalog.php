<?php
/* Template Name: Catalog */ 

get_header();

?>

<div class="container">
        <div class="companiesList">
            <?php 
                global $entreprises;
                while ($entreprises->have_posts()) :
                    $entreprise = $entreprises->the_post();
         
                    $entrepriseCF = get_post_custom($entreprise);

                    if (has_category('catalog') && has_category('cat_isvalid')) :
                      ?>
                    <div class="companyCard">
                        <div class="companyLogo">
                            <img src="<?= replaceStrFromCloudinary($entrepriseCF["logoNormal"][0]); ?>">
                        </div>
                        <div class="socialBar">
                            <a href="<?= $entrepriseCF["Website"][0]; ?>" target="_blank"><i class="fa fa-home  "></i></a>
                            <?php if(isset($entrepriseCF["twitterLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["twitterLink"][0]?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if(isset($entrepriseCF["facebookLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["facebookLink"][0]?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if(isset($entrepriseCF["linkedINLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["linkedINLink"][0]?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <?php endif; ?>
                            <?php if(isset($entrepriseCF["instagramLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["instagramLink"][0]?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if(isset($entrepriseCF["instagooglePlusgramLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["googlePlusLink"][0]?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                            <?php if(isset($entrepriseCF["youtubeLink"][0])) : ?>
                                <a href="<?= $entrepriseCF["youtubeLink"][0]?>" target="_blank"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if (has_category('founders')) :?>
                                <img src="https://res.cloudinary.com/www-comeet-in/image/upload/c_scale,q_100,w_20/v1515670312/happytech/Fichier_2_4x.png" alt="Fondateur HappyTech France" title="Fondateur HappyTech France">
                            <?php endif; ?>
                        </div>
                        <div class="description">
                            <?php if(isset($entrepriseCF["resumeText"][0])) : ?>
                                <p><?= $entrepriseCF["resumeText"][0] ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="getMore">
                            <a href="<?= get_permalink(); ?>">Fiche entreprise</a>
                        </div> -->
                        
                    </div>
                <?php
                endif;
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>


    <?php

get_template_part('template-parts/footer/footer', 'contact');


get_footer();

?>