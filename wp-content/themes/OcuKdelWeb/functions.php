<?php
add_theme_support('post-thumbnails');
// メインの画像サイズ
add_image_size('main', 600, 400, true);

// 抜粋文
function cms_excerpt_more() {
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length() {
    return 52;
}
add_filter('excerpt_length', 'cms_excerpt_length', 999);

add_post_type_support('page', 'excerpt');


// ナビメニュー
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_footer' => 'フッターナビ'
    )
);

// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop'); 