<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'custom-spacing' );
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => 'ホワイトスモーク',
                'slug'  => 'white-smoke',
                'color' => '#f5f5f5',
            ),
            array(
                'name'  => 'クリーム',
                'slug'  => 'cream',
                'color' => '#FFFDFA',
            ),
            array(
                'name'  => 'ブラウン',
                'slug'  => 'brown',
                'color' => '#3C2A10',
            ),
            array(
                'name'  => 'ブルー',
                'slug'  => 'blue',
                'color' => '#4A6C9B',
            ),
            array(
                'name'  => 'グレージュ',
                'slug'  => 'gray-beige',
                'color' => '#DED8D3',
            ),
            array(
                'name'  => 'ライトベージュ',
                'slug'  => 'light-beige',
                'color' => '#F2EDE9',
            ),
            array(
                'name'  => 'ホワイト',
                'slug'  => 'white',
                'color' => '#FFFFFF',
            ),
        )
    );
    add_image_size( 'p-mainvisual-blog', 1200, 600, true );

function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { 
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { 
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' );

function hamburger_style() {
    wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap.css', array(), null );
    wp_enqueue_script( 'webfonts', get_template_directory_uri() . '/js/webfonts.js', array(), null, true );
    wp_enqueue_script( 'sidebar', get_template_directory_uri() . '/js/sidebar.js', array(), null, true );
    wp_enqueue_style( 'reset-style', '//unpkg.com/ress/dist/ress.min.css', array(), null );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/common.css', array(), filemtime( get_template_directory() . '/css/common.css' ) );
}
add_action( 'wp_enqueue_scripts', 'hamburger_style' );

//サイドバーにウィジェット機能を追加する
function hamburger_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'バーガー',
            'id'            => 'burger_widget',
            'description'   => 'バーガー用ウィジェットです',
            'before_widget' => '<section id="%1$s" class="widget %2$s p-sidebar-list">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar (
        array(
            'name'          => 'サイド',
            'id'            => 'sidemenu_widget',
            'description'   => 'サイドメニュー用ウィジェットです',
            'before_widget' => '<section id="%1$s" class="widget %2$s p-sidebar-list">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar (
        array(
            'name'          => 'ドリンク',
            'id'            => 'drink_widget',
            'description'   => 'ドリンク用ウィジェットです',
            'before_widget' => '<section id="%1$s" class="widget %2$s p-sidebar-list">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'hamburger_widgets_init' );