<?php

function load_files(){
    wp_enqueue_style('school_home_stylesheet', get_theme_file_uri ('/build/style-index.css'));
    wp_enqueue_style('school_stylesheet2', get_theme_file_uri ('/build/index.css'));
    
    wp_enqueue_style('font_awesome_icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('school_fonts','https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Rubik:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('school_stylesheet', get_stylesheet_uri());

    wp_enqueue_script('school_js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts','load_files');