


<?php

function load_stylesheets(){
	wp_register_style('font', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', array(), 1, 'all');
	wp_enqueue_style('font');
	wp_register_style('customcss', get_template_directory_uri() . '/css/freelancer.min.css', array(), 1, 'all');
	wp_enqueue_style('customcss');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function load_scripts(){
	
	wp_register_script('jquerylocal', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquerylocal');
	
	wp_register_script('bootstrapJs', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrapJs');
	
	wp_register_script('easingJs', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), 1, 1, 1);
	wp_enqueue_script('easingJs');
	
	wp_register_script('customtm', get_template_directory_uri() . '/js/freelancer.min.js', array(), 1, 1, 1);
	wp_enqueue_script('customtm');
	
	
	
}
add_action('wp_enqueue_scripts', 'load_scripts');
  


?>