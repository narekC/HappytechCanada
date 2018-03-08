<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <?php // if(isGlobalSite()) : ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-toggle" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php // endif; ?>
        <a class="navbar-brand" href="<?= get_option('home'); ?>">
            <img id="logo" src="<?= get_theme_mod( 'tcx_change_logo' ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
        </a>
    </div>
    <?php // if(!isGlobalSite()) :
        // get_template_part('template-parts/navigation/navigation','socials');
    // endif; ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php //if(isGlobalSite()) : ?>
    <div class="collapse navbar-collapse navbar-happytech" id="menu-toggle">
        <?php
            wp_nav_menu( array( 
            'theme_location' => 'happytech-menu',
            'menu_class' => 'nav navbar-nav navbar-right navbar-happytech',
            'container' => 'ul' ) );  
        ?>
    </div>
    <?php // endif; ?>
</div>
</nav>