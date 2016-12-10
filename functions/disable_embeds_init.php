<?php 
	function disable_embeds_init() {

	    // Remove oEmbed-specific JavaScript from the front-end and back-end.
	    remove_action('wp_head', 'wp_oembed_add_host_js');

	    // Remove Emojis
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		// Remove DNS prefetch 
		remove_action( 'wp_head', 'wp_resource_hints', 2 );
	}

	add_action('init', 'disable_embeds_init');
?>