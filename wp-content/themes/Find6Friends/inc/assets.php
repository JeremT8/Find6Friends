<?php 
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('main', get_template_directory_uri(). '/assets/style.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri(). 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
	wp_enqueue_script('main', get_template_directory_uri(). '/assets/main.js');
	wp_enqueue_script('scroll', get_template_directory_uri(). 'https://unpkg.com/scrollreveal');
});