<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

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
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), null );
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