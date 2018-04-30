<?php

	/*
	   ==================================
		Include scriptz
	   ==================================
	 
	*/

function first_Theme_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() .  '/css/bootstrap.min.css', array(), '3.3.6', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() .  '/css/firstTheme.css', array(), '1.0.0', 'all');
 	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() .  '/js/bootstrap.min.js',array(), '3.3.6', true);
	wp_enqueue_script( 'customjs', get_template_directory_uri() .  '/js/firstTheme.js',array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'first_Theme_script_enqueue');

	/*
	   ==================================
		Activate menus
	   ==================================
	 
	*/

function first_Theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'first_Theme_setup');

	/*
	   ==================================
		Theme support hookz
	   ==================================
	 
	*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

/*
	   ==================================
		Sidebar function
	   ==================================
	 
	*/

function firstTheme_widget_setup() {

	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
			)
		);
}

add_action('widgets_init','firstTheme_widget_setup');

/*
	   ==================================
		Include Walker file
	   ==================================
	 
	*/

require get_template_directory() . '/inc/walker.php';

/*
	   ==================================
		Head function
	   ==================================
	 
	*/

function firstTheme_remove_version(){
	return '';
}

add_filter( 'the_generator','firstTheme_remove_version' );

/*
	   ==================================
	IMPORTANT FOR DEVELOPMENT / DEBUG - Show what page/file/template part currently serving code
	   ==================================
	 
	

function show_template() {
    if( is_super_admin() ){
        global $template;
        print_r($template);
    } 
}
add_action('wp_footer', 'show_template');
*/