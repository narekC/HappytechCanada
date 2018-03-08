<?php
/*
Plugin Name: HappyTech Base Functions
Description: Global functions for every HappyTech website.
Version: 0.1
License: GPL
Author: HappyTech
Author URI: https://www.happytech.life/
*/

/************* JQUERY FROM GOOGLE CDN *************/

add_action( 'init', 'wpm_jquery' );

function wpm_jquery() {
if ( !is_admin() ) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
   }
}

/************* LOGO CHANGER *************/

function register_logo_changer_customizer($wp_customize){

  $wp_customize->add_setting(
    'tcx_change_logo',
    array(
        'default'    =>  '',
        'transport'  =>  'postMessage'
    ));

  $wp_customize->add_control(
    'change_logo',
    array(
      'label' => __('Change Logo by URL', 'tcx'),
      'section' => 'title_tagline',
      'settings' => 'tcx_change_logo'
    ));
}
add_action('customize_register', 'register_logo_changer_customizer');

/************* THUMBNAILS SUPPORT *************/

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

/************* WORDPRESS EMOJI *************/

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/************* SOCIAL NETWORKS HANDLES *************/

function customize_socials($wp_customize) {

  $wp_customize->add_section('msn_social_networks', array(
    'title'    => __('Social Network Handles', 'msn'),
    'description' => 'You can put the social networks of the HappyTech website',
    'priority' => 70,
  ));

  // Facebook
  $wp_customize->add_setting('msn_fb', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_fb', array(
    'label'      => __('Facebook Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_fb',
  ));

  // Twitter
  $wp_customize->add_setting('msn_tw', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_tw', array(
    'label'      => __('Twitter Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_tw',
  ));

  // Linkedin
  $wp_customize->add_setting('msn_ln', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_ln', array(
    'label'      => __('Linkedin Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_ln',
  ));

  // Instagram
  $wp_customize->add_setting('msn_in', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_in', array(
    'label'      => __('Instagram Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_in',
  ));

  // Meetup
  $wp_customize->add_setting('msn_mt', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_mt', array(
    'label'      => __('Meetup Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_mt',
  ));

  // Youtube
  $wp_customize->add_setting('msn_yt', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('msn_yt', array(
    'label'      => __('Youtube Link', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'msn_yt',
  ));

  // Structure Type
  $wp_customize->add_setting('str_type', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('str_type', array(
    'label'      => __('Structure Type', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'str_type',
  ));

  // Structure Type
  $wp_customize->add_setting('str_type', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
  ));

  $wp_customize->add_control('str_type', array(
    'label'      => __('Structure Type in Footer', 'msn'),
    'section'    => 'msn_social_networks',
    'settings'   => 'str_type',
  ));
}
add_action( 'customize_register', 'customize_socials' );

/************* ORDER CATALOG BY NAME *************/

function orderCatalogByTitle($query) {
        if ($query->get('post_type') == 'entreprises')
        {
          $query->set('orderby', 'title');
          $query->set('order', 'ASC');
        }
  return $query;
}
add_filter('pre_get_posts', 'orderCatalogByTitle');
orderCatalogByTitle($entreprises);

/************* REMOVE COMMENTS *************/

add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
$post = get_post( $post_id );
if ('post' == $post->post_type)
$open = false;
return $open;
}

/************* OPTIMIZATIONS *************/

// Remove Admin Login Header CSS
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Remove WordPress Version
remove_action("wp_head", "wp_generator");

// Normalize Connection Errors
add_filter('login_errors',create_function('$a', "return null;"));

?>