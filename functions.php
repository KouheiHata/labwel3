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
    
}