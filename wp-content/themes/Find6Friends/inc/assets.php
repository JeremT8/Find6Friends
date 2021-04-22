<?php 
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('main', get_template_directory_uri(). '/assets/style.css');
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
	wp_enqueue_script('main', get_template_directory_uri(). '/assets/main.js',[], false, true);
	wp_enqueue_script('scroll', '//unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js',[], false, true);
});