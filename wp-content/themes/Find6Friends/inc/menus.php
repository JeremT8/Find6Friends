<?php
add_action('after_setup_theme', function () {
    register_nav_menus(
        array(
            'header-loggedin'       => __( 'Main Menu Logged In', 'find6friends' ),
            'header-loggedout'      => __( 'Main Menu Logged Out', 'find6friends' )
        )
    );
});

