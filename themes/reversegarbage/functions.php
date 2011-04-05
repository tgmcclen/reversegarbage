<?php
function reversegarbage_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Navigator Widget Area', 'reversegarbage' ),
		'id' => 'navigator-widget-area',
		'description' => __( 'Navigator widget area', 'reversegarbage' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  register_sidebar( array(
  	'name' => __( 'Tool Widget Area', 'reversegarbage' ),
  	'id' => 'tool-widget-area',
  	'description' => __( 'Tool widget area', 'reversegarbage' ),
  	'before_widget' => '',
  	'after_widget' => '',
  	'before_title' => '<h3 class="widget-title">',
  	'after_title' => '</h3>',
  ) );
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
  // turning off some functionality that exists in twentyten theme that we don't support - probably not the right hook to use but it works!
  unregister_nav_menu('primary');
  remove_custom_background();
  // Unregister any widget areas from parent theme here - right now its fine to keep them all intact!
  // unregister_sidebar( 'third-footer-widget-area' );
  // unregister_sidebar( 'fourth-footer-widget-area' );
}
// unregister sidebars by tying onto same hook again, with priority '11'
add_action( 'widgets_init', 'my_unregister_sidebars', 11 );
