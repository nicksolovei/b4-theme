<?php

function mg24_setup() {
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 350);
	update_option('medium_size_w', 730);
	update_option('large_size_w', 1110);
}
add_action('init', 'mg24_setup');

if (! isset($content_width)) {
	$content_width = 600;
}

if ( ! function_exists( 'mg24_excerpt_readmore' ) ) {
	function mg24_excerpt_readmore() {
		return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Continue reading', 'mg24') . ' <i class="fas fa-arrow-right"></i>' . '</a></p>';
	}
	add_filter('excerpt_more', 'mg24_excerpt_readmore');
}

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
