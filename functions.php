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






function new_excerpt_more( $more ) {
        return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}

add_filter('excerpt_mblength', 'new_excerpt_mblength');
// add_filter( 'excerpt_more', 'new_excerpt_more' );






