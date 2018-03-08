<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    
    <!-- HEAD standard properties -->
    <?php get_template_part('template-parts/head/head', 'properties'); ?>

    <!-- HEAD CSS properties -->
    <?php get_template_part('template-parts/head/head', 'stylesheets'); ?>

    <!-- HEAD SEO properties -->
    <?php get_template_part('template-parts/head/head', 'seo'); ?>

    <!-- WordPress HEAD properties -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    <header>

        <?php 
            // if(is_home()) :
                get_template_part('template-parts/header/header', 'carousel');
                // endif; 
        ?>
        
        <?php get_template_part('template-parts/navigation/navigation', 'bar'); ?>
        
    </header>