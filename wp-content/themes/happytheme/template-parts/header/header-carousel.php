<video playsinline autoplay muted loop poster="<?php echo get_bloginfo( 'template_directory' );?>/assets/videos/HT.jpg" id="bgvid">
    <source src="<?php echo get_bloginfo( 'template_directory' );?>/assets/videos/HT.webm" type="video/webm">
    <source src="<?php echo get_bloginfo( 'template_directory' );?>/assets/videos/HT.m4v" type="video/mp4">
</video>
<section id="header">
            <div class="container">
                <div class="header-push">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <?php $post_id = get_the_ID(); ?>
                            <h1 class="blogTitle">
                            <?php echo (is_home() || is_front_page() || is_404()) ? get_bloginfo('name') : get_the_title($post_id); ?>
                            </h1>
                            <hr>
                            <div class="clearfix"></div>
                            <h2 class="header-subtitle">
                                I <img class="emoji" src="https://res.cloudinary.com/www-comeet-in/image/upload/c_scale,o_50,w_35/v1516202458/happytech/wordpress/icons/big-heart.svg"> HappyTech | #happytech
                            </h2>
                            <div class="app-buttons">
                                <?php if (isGlobalSite()) : ?>
                                    <a href="<?php $mission = get_post(57); echo get_permalink($mission); ?>" class="buttons" data-scroll><span>EN SAVOIR PLUS</span></a>
                                    <a href="#contact" class="buttons" data-scroll><span>REJOIGNEZ-NOUS</span></a>
                                <?php elseif (!isGlobalSite()) : ?>
                                    <a href="#contact" class="buttons" data-scroll><span>NOUS REJOINDRE</span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>