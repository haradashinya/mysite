<?php
add_theme_support('menus');
register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        )
    );



add_theme_support('post-thumbnails');


function shortcode_tw(){
    return "<a href='http://twitter.com/outsider_0219'>@outsider_0219をフォローする</a>";
}

add_shortcode('tw','shortcode_tw');


// 最初の一行目だけ表示させる
function new_excerpt_mblength($length) {	
     return 1;	
}	








function new_excerpt_more($more) {
       global $post;
	return '<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More ...</a></p>';
}


add_filter('excerpt_mblength', 'new_excerpt_mblength');
add_filter('excerpt_more', 'new_excerpt_more');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

/* インラインスタイル削除 */
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );
remove_action('wp_head', '_admin_bar_bump_cb');
add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );












