<div class="col-sm-6">
    <?php if(get_theme_mod('msn_fb')) : ?>
        <div class="fb-like" data-href="<?= get_theme_mod( 'msn_fb' ) ?>" data-layout="button_count" data-action="like" data-size="small"
        data-show-faces="true" data-share="true"></div>
    <?php endif; ?>

    <?php if(get_theme_mod('msn_tw')) : ?>
        <div style="margin-top: 5px;">
            <a href="<?= get_theme_mod( 'msn_tw' ) ?>" class="twitter-follow-button" data-show-count="true">Follow</a>
            <script async defer src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    <?php endif; ?>

    <?php if(get_theme_mod('msn_ln')) : ?>
        <script async defer src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
        <script async defer type="IN/FollowCompany" data-id="<?= getLinkedInID(); ?>" data-counter="right"></script>
    <?php endif; ?>
</div>