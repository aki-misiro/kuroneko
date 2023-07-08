<?php
function neko_theme_setup() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'html5', array( 'search-form' ) );
   add_image_size( 'page_eyecatch', 1100, 610, true );
   add_image_size( 'archive_thumbnail', 200, 150, true );
   register_nav_menu( 'main-menu', 'メインメニュー' );
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

function neko_widgets_init() {
   register_sidebar(
      array(
         'name' => 'サイドバー',
         'id' => 'sidebar-widget-area',
         'description' => '投稿・固定ページのサイドバー',
         'before_widget' => '<div id="%1$s" class="%2$s">',
         'after_widget' => '</div>',
      )
   );
   register_sidebars(
      3,
      array(
         'name' => 'フッター %d',
         'id' => 'footer-widget-area',
         'description' => 'フッターのサイドバー',
         'before_widget' => '<div id="%1$s" class="%2$s">',
         'after_widget' => '</div>',
      )
   );
}
add_action( 'widgets_init', 'neko_widgets_init' );

function neko_block_setup() {
   add_theme_support( 'wp-block-styles' );
   add_theme_support( 'responsive-embeds' );
   add_theme_support( 'align-wide' );
   add_theme_support(
      'editor-color-palette',
      array(
         array(
            'name' => 'スカイブルー',
            'slug' => 'skyblue',
            'color' => '#00A1C6',
         ),
         array(
            'name' => 'ライトスカイブルー',
            'slug' => 'light-skyblue',
            'color' => '#ECF5F7',
         ),
         array(
            'name' => 'ライトグレー',
            'slug' => 'light-gray',
            'color' => '#F7F6F5',
         ),
         array(
            'name' => 'グレー',
            'slug' => 'gray',
            'color' => '#767268',
         ),
         array(
            'name' => 'ダークグレー',
            'slug' => 'dark-gray',
            'color' => '#43413B',
         ),
      )
   );
   add_theme_support(
      'editor-font-sizes',
      array(
         array(
            'name' => '極小',
            'size' => 14,
            'slug' => 'x-small',
         ),
         array(
            'name' => '小',
            'size' => 16,
            'slug' => 'small',
         ),
         array(
            'name' => '標準',
            'size' => 18,
            'slug' => 'normal',
         ),
         array(
            'name' => '大',
            'size' => 24,
            'slug' => 'large',
         ),
         array(
            'name' => '特大',
            'size' => 36,
            'slug' => 'huge',
         ),
      )
   );
   add_theme_support( 'editor-styles' );
   add_editor_style( 'assets/css/editor-styles.css' );
   add_editor_style( 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap' );
}
add_action( 'after_setup_theme', 'neko_block_setup' );