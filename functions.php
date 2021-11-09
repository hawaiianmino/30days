<?php

//初期設定
function add_my_setups(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
    'html5',
    array( //HTML5でマークアップ
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    )
    );
}
add_action( 'after_setup_theme', 'add_my_setups');

function my_script_init(){
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('my', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts','my_script_init');

function my_menu(){
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'dwawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー'
        )
    );
}
add_action( 'init', 'my_menu' );

add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
    function add_class_on_link($item_output, $item){
    return preg_replace('/(<a.*?)/', '$1' . " class='menu-link'", $item_output);
}

// アップロードファイル容量変更
@ini_set( 'upload_max_size' , '30M' );
@ini_set( 'post_max_size', '30M');
@ini_set( 'max_execution_time', '300' );

// 抜粋表示の文字を消す
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//抜粋する文字数を50文字に設定
function new_excerpt_mblength($length) {
    return 50; 
}
add_filter('excerpt_length', 'new_excerpt_mblength');