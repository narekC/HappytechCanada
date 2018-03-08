<div id="right-side" class="ml-auto p-2 d-flex">
    <ul class="nav navbar-nav navbar-right navbar-happytech d-flex flex-row hidden-xs">
        <li class="block-h">
            <a target="_blank" href="https://www.happytech.life/" title="HappyTech International Committee">
                <i class="fa fa-globe"></i>
            </a>
        </li>
        <?php if(get_theme_mod('msn_tw')) : ?>
        <li class="block-h hidden-xs">
            <a target="_blank" href="<?= get_theme_mod( 'msn_tw' ) ?>" title="Twitter">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <?php endif; ?>
        <?php if(get_theme_mod('msn_fb')) : ?>
        <li class="block-h hidden-xs">
            <a target="_blank" href="<?= get_theme_mod( 'msn_fb' ) ?>" title="Facebook">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <?php endif; ?>
        <?php if(get_theme_mod('msn_ln')) : ?>
        <li class="block-h hidden-xs">
            <a target="_blank" href="<?= get_theme_mod( 'msn_ln' ) ?>" title="Linkedin">
                <i class="fa fa-linkedin"></i>
            </a>
        </li>
        <?php endif; ?>
        <?php if(get_theme_mod('msn_in')) : ?>
        <li class="block-h hidden-xs">
            <a target="_blank" href="<?= get_theme_mod( 'msn_in' ) ?>" title="Instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</div>
</div>