<?php

add_action( 'after_setup_theme', 'training_setup_theme' );

function training_setup_theme() {
    add_theme_support( 'title-tag' );
}

add_action( 'body_open', 'training_body_open' );

function training_body_open() {
    echo 'Action body_open';
}

add_action( 'wp_enqueue_scripts', 'training_load_scripts' );

function training_load_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/style.css' );
}