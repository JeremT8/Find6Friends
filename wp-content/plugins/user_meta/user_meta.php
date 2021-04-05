<?php
/*
Plugin Name: User Meta Plugin
Version: 0.1
Author: JeremT8
Author URI: https://github.com/JeremT8
Text Domain: usermeta
*/
add_action( 'personal_options_update', 'save_extra_user_profile_fields_spv' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields_spv' );

function save_extra_user_profile_fields_spv( $user_id ) {
    if(!current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta($user_id, 'pseudo_ig', $_POST["pseudo_ig"]);
    update_user_meta($user_id, 'plateforme', $_POST["plateforme"]);
}

add_action( 'show_user_profile', 'extra_user_profile_fields_spv' );
add_action( 'edit_user_profile', 'extra_user_profile_fields_spv' );

function extra_user_profile_fields_spv( $user ) { 
    $user_id = $user->ID;
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <td>Pseudo Ig</td>
            <td><input type="text" name="pseudo_ig">
            </td>
        </tr>
        <tr>
        <td>plateforme</td>
        <td><select class="ui search dropdown" name="plateforme">
                <option value="">Plateforme sur laquelle vous jouez </option>
                <option value="playstation">Playstation</option>
                <option value="xbox">Xbox</option>
                <option value="pc">Pc</option>
            </select>
            <script type="text/javascript">
                $(".ui.dropdown").dropdown();
            </script>
        </td>
        </tr>
    </table>
    <script type="text/javascript">
        $('input').addClass('regular-text');
        $('input[name=pseudo_ig]').val('<?php echo get_the_author_meta('pseudo_ig', $user->ID); ?>');
        $('select[name=plateforme]').val('<?php echo get_the_author_meta('plateforme', $user->ID); ?>');
        // Hide some default options //
            /*
            $('.user-url-wrap').hide();
            $('.user-description-wrap').hide();
            $('.user-profile-picture').hide();
            $('.user-rich-editing-wrap').hide();
            $('.user-admin-color-wrap').hide();
            $('.user-comment-shortcuts-wrap').hide();
            $('.show-admin-bar').hide();
            $('.user-language-wrap').hide();
            //*/
    </script>
<?php 
}

function new_modify_user_table_spv( $column ) {
    $column['pseudo_ig'] = 'Pseudo Ig';
    $column['plateforme'] = 'Plateforme';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table_spv' );

function new_modify_user_table_row_spv( $val, $column_name, $user_id ) {
    $meta = get_user_meta($user_id);
    switch ($column_name) {
        case 'pseudo_ig' :
            $pseudo_ig = $meta['pseudo_ig'][0];
            return $pseudo_ig;
        case 'plateforme' :
            $plateforme = $meta['plateforme'][0];
            return $plateforme;
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row_spv', 10, 3 );