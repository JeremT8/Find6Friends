<?php
/*
Plugin Name: User Meta Plugin
Version: 0.1
Author: JeremT8
Author URI: https://github.com/JeremT8
Text Domain: usermeta
*/

add_action( 'personal_options_update', 'save_extra_user_profile_fields_bvh' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields_bvh' );

function save_extra_user_profile_fields_bvh( $user_id ) {
    if(!current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta($user_id, 'pseudo_ig', $_POST["pseudo_ig"]);
    update_user_meta($user_id, 'plateforme', $_POST["plateforme"]);
    update_user_meta($user_id, 'elo', $_POST["elo"]);
}

add_action( 'show_user_profile', 'extra_user_profile_fields_bvh' );
add_action( 'edit_user_profile', 'extra_user_profile_fields_bvh' );

function extra_user_profile_fields_bvh( $user ) { 
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
        <td>Plateforme</td>
        <td><select class="ui search dropdown" name="plateforme">
                <option value="">Select</option>
                <option value="pc">pc</option>
                <option value="xbox">xbox</option>
                <option value="playstation">playstation</option>
            </select>
            <script type="text/javascript">
                $(".ui.dropdown").dropdown();
            </script>
        </td>
        </tr>
        <tr>
        <td>Elo</td>
        <td><select class="ui search dropdown" name="elo">
                <option value="non-classe">Non-Classe</option>
                <option value="cuivre">Cuivre</option>
                <option value="bronze">Bronze</option>
                <option value="argent">Argent</option>
                <option value="or">Or</option>
                <option value="platine">Platine</option>
                <option value="diamant">Diamant</option>
                <option value="champion">Champion</option>
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
        $('select[name=elo]').val('<?php echo get_the_author_meta('elo', $user->ID); ?>');
        
    </script>
<?php 
}

function new_modify_user_table_bvh( $column ) {
    $column['pseudo_ig'] = 'Pseudo Ig';
    $column['plateforme'] = 'Plateforme';
    $column['elo'] = 'Elo';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table_bvh' );

function new_modify_user_table_row_bvh( $val, $column_name, $user_id ) {
    $meta = get_user_meta($user_id);
    switch ($column_name) {
        case 'pseudo_ig' :
            $pseudo_ig = $meta['pseudo_ig'][0];
            return $pseudo_ig;
        case 'plateforme' :
            $plateforme = $meta['plateforme'][0];
            return $plateforme;
        case 'elo' :
            $elo = $meta['elo'][0];
            return $elo;
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row_bvh', 10, 3 );