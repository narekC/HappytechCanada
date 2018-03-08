<div class="col-sm-2 text-center socials">
    <div class="flexContainer">
        <div class="domainLink">
            <a href="/">
                <p>
                <?php 
                    echo substr(get_site_url(), 8);
                ?>
                </p>
            </a>
        </div>
        <div class="socialLinks">
            <ul class="list-inline">
                <?php if(!isGlobalSite()) : ?>
                <li>
                    <a target="_blank" href="https://www.happytech.life/" title="HappyTech International Committee">
                <i class="fa fa-globe"></i>
            </a>
                </li>
                <?php endif; ?>
                <?php if(get_theme_mod('msn_tw')) : ?>
                <li>
                    <a target="_blank" href="<?= get_theme_mod( 'msn_tw' ) ?>" title="Twitter">
                <i class="fa fa-twitter"></i>
            </a>
                </li>
                <?php endif; ?>
                <?php if(get_theme_mod('msn_fb')) : ?>
                <li>
                    <a target="_blank" href="<?= get_theme_mod( 'msn_fb' ) ?>" title="Facebook">
                <i class="fa fa-facebook"></i>
            </a>
                </li>
                <?php endif; ?>
                <?php if(get_theme_mod('msn_ln')) : ?>
                <li>
                    <a target="_blank" href="<?= get_theme_mod( 'msn_ln' ) ?>" title="Linkedin">
                <i class="fa fa-linkedin"></i>
            </a>
                </li>
                <?php endif; ?>
                <?php if(get_theme_mod('msn_in')) : ?>
                <li>
                    <a target="_blank" href="<?= get_theme_mod( 'msn_in' ) ?>" title="Instagram">
                <i class="fa fa-instagram"></i>
            </a>
                </li>
                <?php endif; ?>
                <?php if(get_theme_mod('msn_yt')) : ?>
                <li>
                    <a target="_blank" href="<?= get_theme_mod( 'msn_yt' ) ?>" title="YouTube Channel">
                <i class="fa fa-youtube"></i>
            </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if(!isGlobalSite()) : ?>
        <div class="joinLink">
            <a href="https://www.happytech.life/#contact" target="_blank">
                Nous contacter
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>