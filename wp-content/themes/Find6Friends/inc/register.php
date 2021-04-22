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

add_action('wp_logout','ps_redirect_after_logout');
function ps_redirect_after_logout(){
         wp_redirect( home_url('/') );
         exit();
}

add_action('user_register', 'addMyCustomMeta');    
add_action('personal_options_update', 'addMyCustomMeta' );    
add_action('edit_user_profile_update','addMyCustomMeta' );    
function addMyCustomMeta( $user_id ) {    
           update_user_meta( $user_id, 'pseudo_ig', $_POST['pseudo_ig'] ); 
           update_user_meta( $user_id, 'plateforme', $_POST['plateforme'] ); 
           update_user_meta( $user_id, 'elo', $_POST['elo'] ); 
}



add_filter('show_admin_bar','__return_false'); 