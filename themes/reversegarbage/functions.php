<?php
function reversegarbage_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Before Content Widget Area', 'reversegarbage' ),
		'id' => 'before-content-widget-area',
		'description' => __( 'Before content widget area', 'reversegarbage' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
register_sidebar( array(
	'name' => __( 'After Content Widget Area', 'reversegarbage' ),
	'id' => 'after-content-widget-area',
	'description' => __( 'After content widget area', 'reversegarbage' ),
	'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
}
// Register sidebars by running twentyten_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'reversegarbage_widgets_init' );

function my_unregister_sidebars() {
  // Unregister any widget areas from parent theme here - right now its fine to keep them all intact!
  // unregister_sidebar( 'third-footer-widget-area' );
  // unregister_sidebar( 'fourth-footer-widget-area' );
}
// unregister sidebars by tying onto same hook again, with priority '11'
add_action( 'widgets_init', 'my_unregister_sidebars', 11 );
