<?php
if ( ! isset( $content_width ) )
	$content_width = 640; 
	
	/* shortcodes */
	wp_enqueue_script( 'cwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
function cwp_comment( $comment, $args, $depth ) {
    add_editor_style( '/css/custom-editor-style.css' );
}