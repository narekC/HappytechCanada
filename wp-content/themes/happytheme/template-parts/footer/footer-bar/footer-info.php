<div class="col-md-1 col-sm-1">
    <a href='/'>
        <img class="logo center-block" src="https://res.cloudinary.com/www-comeet-in/image/upload/v1509465140/happytech/connect/paris/logo_happytech_2048.png"
            alt="Logo happytech">
    </a>
</div>
<div class="col-sm-3">
    <h4><?= get_bloginfo( 'name' ); ?></h4>
    <h3><?= get_theme_mod( 'str_type' ); ?></h3>
    <ul class="list-inline p-t-10 menu">
        <?php if(get_theme_mod('msn_mt')) : ?>
        <li>
            <a data-scroll href="<?= get_theme_mod( 'msn_mt' ) ?>">
                MEETUP
            </a>
        </li>
    <?php endif; ?>
    </ul>
</div>