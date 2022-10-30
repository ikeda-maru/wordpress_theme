<?php

// スクリプトを表示する
add_action('wp_body_open', function() {
  echo '<!--wp_body_open action hook-->';
});

// 管理画面でアイキャッチ画像の設定可能
add_action('init', function() {
  add_theme_support('post-thumbnails');
});

add_action('after_setup_theme', function() {
  add_theme_support( 'title-tag' );
});

// アイキャッチ画像のURLを取得・表示する関数を設定
function getEyecatchUrl() {
  if (has_post_thumbnail()) {
    $id  = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, "large");
  } else {
    $img = array(get_template_directory_uri() . '/assets/img/about-bg.jpg');
  }
  return $img[0];
}

// 管理画面にナビゲーションメニューを追加
add_action('init', function() {
  register_nav_menus([
    'globalNav' => 'グローバルナビゲーション',
    'footerNav' => 'フッターナビゲーション',
  ]);
});

// 投稿タイプを定義
add_action('init', function() {
  register_post_type('music', [
    'label'        => '音楽', // 管理画面のメニューに表示される名前
    'supports'     => ['title', 'editor', 'thumbnail',  'page-attributes'], // 記事編集画面で入力できる項目を設定
    'public'       => true, // trueでパブリック。falseで管理画面から消えるが、使用はできる。
    'has_archive'  => true, // アーカイブを有効化
    'hierarchical' => true, // ページ属性で親子関係の設定可能
  ]);
});

