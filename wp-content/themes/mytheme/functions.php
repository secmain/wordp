<?php

function mytheme_setup() {
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue() {
	wp_enqueue_style(
		'mytheme-style',
		get_stylesheet_uri(),
		array(),
		filemtime(get_theme_file_path('style.css'))
	);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue');