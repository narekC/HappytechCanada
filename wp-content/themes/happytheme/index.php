<?php get_header(); ?>

<?php
    if (!isGlobalSite()) {
    get_template_part('template-parts/companies/slider', 'companies' ); 
    };
?>

<?php 
    if(isGlobalSite()) :
        get_template_part('template-parts/features/features','websites');
    endif;
?>

    <div class="content">
    <?php 
    $post_id = get_the_ID();
    $cat = get_the_category($post_id);
    query_posts("cat={$cat[0]->cat_ID}");
    if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
    get_template_part( 'content', get_post_format() );
  
    endwhile; endif;
    wp_reset_query();  ?>

    </div>

    <?php 
        if(!isGlobalSite()) : 
            get_template_part('template-parts/companies/slider', 'partners' ); 
        endif;
    ?>

    <?php if(isGlobalSite()) { ?>
    <div class="features">
        <?php get_template_part('template-parts/features/features', 'map'); ?>
        <?php get_template_part('template-parts/features/features', 'partners'); ?>
    </div>
    <?php }; ?>

    
    <?php
        if(isGlobalSite()) :
            get_template_part('template-parts/footer/footer', 'contact');
        endif;
    ?>

    <?php get_footer(); ?>