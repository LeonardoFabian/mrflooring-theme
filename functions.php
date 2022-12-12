<?php

function mrflooring_scripts()
{
    wp_enqueue_style(
        'mrflooring_main_styles',
        get_stylesheet_uri()
    );

    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), '3.2.4' );
}

add_action('wp_enqueue_scripts', 'mrflooring_scripts');
