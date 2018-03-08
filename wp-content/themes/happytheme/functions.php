<?php
/************* JQUERY FROM GOOGLE CDN *************/

add_action( 'init', 'wpm_jquery' );

function wpm_jquery() {
if ( !is_admin() ) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
   }
}

// ADD LOGO SETTING OPTION
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


// THUMBNAIL SUPPORT
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// HAPPYTECH CUSTOM MENU
function wpb_custom_new_menu() {
  register_nav_menu('happytech-menu',__( 'HappyTech Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// COMPANIES SLIDER & CATALOG
$entreprises = new WP_Query( array( 'post_type' => 'entreprise', 'posts_per_page' => -1, 'orderby'=>'post_title','order'=>'ASC' ) );
// HT LOCATIONS WEBSITES
$htWebsites = new WP_Query( array( 'post_type' => 'happytechwebsites', 'post_status' => 'publish', 'posts_per_page' => 10 ) );  
// HIC PARTNERS 
$hicPartners = new WP_Query( array( 'post_type' => 'hic-partners', 'post_status' => 'publish', 'posts_per_page' => 10 ) ); 
// PRESS ARTICLES
$htPressPosts = new WP_Query( array( 'post_type' => 'presse', 'post_status' => 'publish', 'posts_per_page' => 50 ) );


// CHECK IF WEBSITE IS GLOBAL HAPPYTECH SITE
function isGlobalSite() {
  $globalsite = substr($_SERVER['SERVER_NAME'], 0, 3) === 'www';
  return $globalsite;
}

function getDomainName(){
  $getDomain = $_SERVER['SERVER_NAME'];
  $getSubDomain = strtok($getDomain, '.');
  return $getSubDomain;
}

// ADD CUSTOM SOCIAL NETWORKS FUNCTIONS
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



// GET LINKEDIN COMPANY ID TO DISPLAY DYNAMIC LINKEDIN BUTTON
function getLinkedInID() {
  $strToConvert = get_theme_mod( 'msn_ln' );
  $brknStr = explode('/', $strToConvert)[4];
  return $brknStr;
}

// CHANGE CLOUDINARY RULES
function replaceStrFromCloudinary($url) {
  $newLogoURL = str_replace("upload", "upload/f_png,c_fit,q_100,w_215,h_60", $url);
  return $newLogoURL;
}; // CATALOG

function replaceStrFromCloudinaryforHICPartners($url) {
  $newLogoURL = str_replace("upload", "upload/f_png,c_scale,q_100,w_160", $url);
  return $newLogoURL;
}; // HIC PARTNERS

function replaceStrFromCloudinaryforPartners($url) {
    $newLogoURLForPartner = str_replace("upload", "upload/f_png,q_100,c_fit,h_60,w_215", $url);
    return $newLogoURLForPartner;
}; // LOCAL PARTNERS

// ORDER CATALOG BY TITLE
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


// Remove Admin Login Header CSS
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Remove WordPress Version
remove_action("wp_head", "wp_generator");

// Normalize Connection Errors
add_filter('login_errors',create_function('$a', "return null;"));
