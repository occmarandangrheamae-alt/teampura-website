
<?php
/**
 * Team Pura Child Theme Functions
 */

function teampura_enqueue_styles() {
    wp_enqueue_style(
        'astra-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'teampura-child-style',
        get_stylesheet_uri(),
        array('astra-parent-style'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'teampura_enqueue_styles');


function teampura_ebojo_styles() {
    if (is_page('ebojoportfolio')) {
        wp_enqueue_style(
            'teampura-ebojo',
            get_stylesheet_directory_uri() . '/assets/css/ebojo.css',
            array(),
            '1.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'teampura_ebojo_styles');

