<?php

//コンテンツ幅をセット（推奨設定）
if ( ! isset( $content_width ) ) {
    $content_width = 768; //問題があれば幅を変更せよ、単位はpx
}

function custom_theme_setup() {
    //head内にフィードリンクを出力（推奨設定）
    add_theme_support( 'automatic_feed_links' );
    //タイトルタグを動的に出力
    add_theme_support( 'title-tag' );
    //ブロックエディター用のＣＳＳを有効化
    add_theme_support( 'wp-block-styles' );
    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support( 'responsive-embeds' );
    // アイキャッチ有効化
    add_theme_support( 'post-thumbnails' );
    // カスタムメニュー有効化、メニューの位置を設定
    register_nav_menus(
        array(
        'global-nav' => 'グローバルナビゲーション',
        )
    );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

//ウィジェットエリアの登録 
function my_theme_widgets_init() {
    register_sidebar( array(
      'name' => 'Main Sidebar',
      'id' => 'main-sidebar',
    ) );
  }
  add_action( 'widgets_init', 'my_theme_widgets_init' );

function enqueue_scripts() {
    //CSS
    //bootstrap
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    //FontAwesome
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    //メインスタイル
    wp_enqueue_style('main', get_stylesheet_uri() );
    //レスポンシブCSS
    wp_enqueue_style('responsive', get_template_directory_uri().'/responsive.css' );
    // ここからJavascript
    //jQuery
    wp_enqueue_script('jquery3.5', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true );
    //bootstrap4
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true);
    //popper
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3', true);
    //jquery-mousewheel
    //wp_enqueue_script('wheel', get_template_directory_uri().'/js/jquery.mousewheel.min.js/', array(), '', true);
    //JavaScript
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );