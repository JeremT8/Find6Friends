<?php 
defined('ABSPATH') or die('');

add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	add_theme_support('menus');
	add_theme_support('html5');
	add_theme_support('post-thumbnails', array( 'post', 'operator' ));
});

add_action( 'current_screen', 'redirect_non_authorized_user' );
	function redirect_non_authorized_user() {
		// Si t'es pas admin, tu vires
		if ( is_user_logged_in() && ! current_user_can( 'manage_options' ) ) {
			wp_redirect( home_url( '/' ) );
			exit();
		}
	}

function wpsites_query( $query ) {
	if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
			$query->set( 'posts_per_page', 29 );
		}
	}
	add_action( 'pre_get_posts', 'wpsites_query' );

	