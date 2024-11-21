<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function astra_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'astra' ),
    ) );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Custom background color.
    add_theme_support( 'custom-background', apply_filters( 'astra_custom_background_args', array(
        'default-color' => 'ffffff',
    ) ) );

    // Custom logo support.
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'astra_setup' );

/**
 * Enqueue scripts and styles.
 */
function astra_scripts() {
    wp_enqueue_style( 'astra-style', get_stylesheet_uri() );
    wp_enqueue_script( 'astra-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'astra-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'astra_scripts' );