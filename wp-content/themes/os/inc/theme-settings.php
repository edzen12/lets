<?php
if(! defined('ABSPATH') ){
    exit;
}

if ( ! function_exists( 'os_setup' ) ) :

    function os_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'os' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        add_theme_support( 'customize-selective-refresh-widgets' );

    }
endif;
add_action( 'after_setup_theme', 'os_setup' );


function os_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'os_content_width', 640 );
}
add_action( 'after_setup_theme', 'os_content_width', 0 );


function os_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'os' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'os' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title sidebar_titles">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'os_widgets_init' );


add_filter('excerpt_more', function($more) {
    return ' ...';
});

//Сокращение текста более удобная которую можно прямо в тексте можно для каждого элемента по своему можно задавать
function do_excerpt($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    echo implode(' ', $words).' ...';
}
