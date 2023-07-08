<?php
function neko_theme_setup() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'page_eyecatch', 1100, 610, true );
   add_image_size( 'archive_thumbnail', 200, 150, true );
}
add_action( 'after_setup_theme', 'neko_theme_setup' );

function neko_enqueue_scripts() {
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script(
      'kuroneko-theme-common',
      get_template_directory_uri() . '/assets/js/theme-common.js',
      array(),
      '1.0.0',
      true
   );
   wp_enqueue_style(
      'googlefonts',
      'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap',
      array(),
      '1.0.0'
   );
   wp_enqueue_style(
      'kuroneko-theme-styles',
      get_template_directory_uri() . '/assets/css/theme-styles.css',
      array(),
      '1.0.0'
   );
}
add_action( 'wp_enqueue_scripts', 'neko_enqueue_scripts' );