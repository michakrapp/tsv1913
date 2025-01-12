<?php

// Additional functions for the theme

// disallow file edit in admin
add_action( 'init', function() {
    if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
        define( 'DISALLOW_FILE_EDIT', true );
    }
});


// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'tsv1913_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since tsv1913 1.0
	 *
	 * @return void
	 */
	function tsv1913_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
//add_action( 'after_setup_theme', 'tsv1913_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'tsv1913_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since tsv1913 1.0
	 *
	 * @return void
	 */
	function tsv1913_enqueue_styles() {
		wp_enqueue_style(
			'tsv1913-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'tsv1913_enqueue_styles' );
