<?php 

function cutecarrot_script_enqueue(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), '2.2.4', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cutecarrot_script_enqueue');

function cutecarrot_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'cutecarrot_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('image'));

function cutecarrot_widget_setup(){
		$args = array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar-1',
			'description'   => 'Standard sidebar',
			'class'         => 'custom',
			'before_widget' => '<aside id="%1s" class="widget %2s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);
	
		register_sidebar( $args );
}
add_action('widgets_init', 'cutecarrot_widget_setup');

?>