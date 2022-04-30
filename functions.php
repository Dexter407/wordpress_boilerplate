<?php

if (!defined('THEME_DIR_PATH')) {
  define('THEME_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('THEME_DIR_URI')) {
  define('THEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('THEME_BUILD_DIR_PATH')) {
  define('THEME_BUILD_DIR_PATH', untrailingslashit(get_template_directory()) . '/build');
}

if (!defined('THEME_BUILD_DIR_URI')) {
  define('THEME_BUILD_DIR_URI', untrailingslashit(get_template_directory_uri()) . '/build');
}

if (!defined('THEME_BUILD_JS_DIR_PATH')) {
  define('THEME_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/build/js');
}

if (!defined('THEME_BUILD_JS_DIR_URI')) {
  define('THEME_BUILD_JS_DIR_URI', untrailingslashit(get_template_directory_uri()) . '/build/js');
}

if (!defined('THEME_BUILD_IMG_URI')) {
  define('THEME_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/build/src/img');
}

if (!defined('THEME_BUILD_CSS_DIR_PATH')) {
  define('THEME_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/build/css');
}

if (!defined('THEME_BUILD_CSS_DIR_URI')) {
  define('THEME_BUILD_CSS_DIR_URI', untrailingslashit(get_template_directory_uri()) . '/build/css');
}

if (!defined('THEME_BUILD_LIB_DIR_URI')) {
  define('THEME_BUILD_LIB_DIR_URI', untrailingslashit(get_template_directory_uri()) . '/build/library');
}

function shynh_files()
{
  // Register styles.
  wp_register_style('Montserrat-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');
  wp_register_style('roboto-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_register_style('Abril-Fatface-google-fonts', '//fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');
  wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_register_style('style', THEME_BUILD_CSS_DIR_URI . "/styles.css", array(), '1.0', FALSE);

  //Enqueue styles
  wp_enqueue_style('Montserrat-google-fonts');
  wp_enqueue_style('roboto-google-fonts');
  wp_enqueue_style('Abril-Fatface-google-fonts');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('style');

  // Register scripts.
  wp_register_script('shynh-jquery', THEME_BUILD_LIB_DIR_URI . "/js/add-ons/jquery-3.2.0.min.js", array(), '3.2.0', TRUE);
  wp_register_script('shynh-jquery-fancybox', THEME_BUILD_LIB_DIR_URI . "/js/add-ons/jquery.fancybox.min.js", array(), '1.0', TRUE);
  wp_register_script('shynh-jquery-matchHeight', THEME_BUILD_LIB_DIR_URI . "/js/add-ons/jquery.matchHeight.min.js", array(), '1.0', TRUE);
  wp_register_script('shynh-jquery-validate', THEME_BUILD_LIB_DIR_URI . "/js/add-ons/jquery.validate.min.js", array(), '1.0', TRUE);
  wp_register_script('shynh-carousel', THEME_BUILD_LIB_DIR_URI . "/js/add-ons/owl.carousel.min.js", array(), '1.0', TRUE);
  wp_register_script('shynh-script', THEME_BUILD_JS_DIR_URI . "/scripts.js", array(), '1.0', TRUE);

  // Enqueue scripts.
  wp_enqueue_script('shynh-jquery');
  wp_enqueue_script('shynh-jquery-fancybox');
  wp_enqueue_script('shynh-jquery-matchHeight');
  wp_enqueue_script('shynh-jquery-validate');
  wp_enqueue_script('shynh-carousel');
  wp_enqueue_script('shynh-script');

  wp_localize_script('main-shynh-js', 'shynhData', array(
    'root_url' => get_site_url()
  ));
}

add_action('wp_enqueue_scripts', 'shynh_files');

function shynh_features()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'shynh_features');
