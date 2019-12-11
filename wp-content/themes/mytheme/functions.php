<?php

function mytheme_setup() {
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');

	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');

	add_theme_support('title-tag');
	add_theme_support('html5', array(
			'style',
			'script'
	));
	add_theme_support('post-thumbnails');
	add_theme_support('align-wide');
}

add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue() {
	wp_enqueue_style(
		'myfonts',
		'https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'dashicons'
	);

	wp_enqueue_style(
		'mytheme-style',
		get_stylesheet_uri(),
		array(),
		filemtime(get_theme_file_path('style.css'))
	);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue');

function mytheme_widgets() {
	register_sidebar(array(
			'id' => 'sidebar-1',
			'name' => 'footer-menu',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'before_widget' => '</section>'
		)
	);
}
add_action('widgets_init', 'mytheme_widgets');