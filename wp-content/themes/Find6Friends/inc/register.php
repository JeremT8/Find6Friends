<?php
add_action('send_headers','site_router');

function site_router(){
    $root = str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
    $url  = str_replace($root ,'',$_SERVER['REQUEST_URI']);
    $url  = explode('/',$url); 
    if(count($url) == 1 && $url[0] == 'login'){
        require 'login-form.php'; 
        die();
    }else if(count($url) == 1 && $url[0] == 'profil'){
        require 'profil.php'; 
        die();
    }else if(count($url) == 1 && $url[0] == 'logout'){
        wp_logout();
        header('location:'.$root);
        die();
    } else if(count($url) == 1 && $url[0] == 'register'){
        require 'register-form.php'; 
        die();
    }
}

add_filter('show_admin_bar','__return_false'); 