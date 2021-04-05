<?php
add_action('after_setup_theme', function () {
    register_nav_menus(
        array(
            'header-loggedin'       => __( 'Main Menu Logged In', 'find6friends' ),
            'header-loggedout'      => __( 'Main Menu Logged Out', 'find6friends' )
        )
    );
});

add_filter( 'wp_nav_menu_items', 'my_custom_menu_item');
function my_custom_menu_item($items)
{
    if(is_user_logged_in())
    {
        $user=wp_get_current_user();
        $name=$user->display_name; 
        $items .= '<li style="text-transform:uppercase;text-decoration: none;
        color: whitesmoke;text-transform: uppercase;
        font-size: 1.6rem;
        letter-spacing: 2px;">Bienvenue '.$name.'</a></li>';
    }
    return $items;
}
