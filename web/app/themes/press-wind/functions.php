<?php

namespace  PressWind;

if (!defined('WP_ENV')) {
  define('WP_ENV', 'development');
}

// core
require_once dirname(__FILE__) . '/inc/core/disable/index.php';
require_once dirname(__FILE__) . '/inc/core/assets.php';

// inc
require_once dirname(__FILE__) . '/inc/disable.php';
require_once dirname(__FILE__) . '/inc/gutenberg.php';

// pwa icons
if (file_exists(dirname(__FILE__) . '/inc/pwa_head.php')) {
  include dirname(__FILE__) . '/inc/pwa_head.php';
}


/**
 * Theme setup.
 */
function setup()
{
  add_theme_support('automatic-feed-links');

  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');

  // add_theme_support('html5', [
  //   'comment-form',
  //   'comment-list',
  //   'gallery',
  //   'caption',
  // ]);

  // add_theme_support('post-formats', [
  //   'aside',
  //   'image',
  //   'video',
  //   'quote',
  //   'link',
  //   'gallery',
  //   'audio',
  // ]);

  register_nav_menus(array(
    'primary'   => __('Primary Menu', 'press-wind'),
    // 'secondary' => __('Secondary Menu', 'press-wind')
  ));


  load_theme_textdomain('press-wind', get_template_directory() . '/languages');
}

add_action('after_setup_theme', __NAMESPACE__ . '\setup');



function register_assets() {
  wp_enqueue_script('jquery' );

  wp_enqueue_script( 
    'manageForm', 
    get_template_directory_uri() . '/assets/js/form.js', [ 'jquery' ], 
    '1.0', 
    true 
  );
}

add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\register_assets');




add_action( 'wp_ajax_send_message', __NAMESPACE__ . '\send_message' );
add_action( 'wp_ajax_nopriv_send_message',  __NAMESPACE__ .'\send_message' );

function send_message() {
  if(!isset($_REQUEST['nonce']) or !wp_verify_nonce($_REQUEST['nonce'], 'send_message')){
    wp_send_json_error( "Non autorisé", 403 );
  }
    
  if(
    $_POST['surname'] === '' or
    $_POST['name'] === '' or
    $_POST['mail'] === '' or
    $_POST['phone'] === '' or
    $_POST['subject'] === '' or
    $_POST['message'] === ''
  ) {
    wp_send_json_error( "Champ manquant.", 403 );
  }

  $surname = sanitize_text_field( $_POST['surname'] );
  $name = sanitize_text_field( $_POST['name'] );
  $mail = sanitize_text_field( $_POST['mail'] );
  $phone = sanitize_text_field( $_POST['phone'] );
  $subject = sanitize_text_field( $_POST['subject'] );
  $message = sanitize_text_field( $_POST['message'] );

    
	wp_send_json_success( 'succès' );
}