<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="当店のハンバーガメニュー紹介　トップページ">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <header class="l-header">
            <div class="p-header-inner">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="p-logo" src="<?php echo esc_url( get_template_directory_uri() . '/images/pc_logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a></h1>
                <?php get_search_form(); ?>
            </div>
            <button class="c-button--menu u-tab-only js-buttonToggle">Menu</button>
        </header>
        
