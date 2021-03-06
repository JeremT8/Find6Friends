<?php get_header() ?>
<section class="hero" id="hero">
    <div class="container">
        <h2 class="sub-headline sub-headline-hero">
            <span class="first-letter">R</span>ejoindres
        </h2>
        <h1 class="headline">Find 6 Friends</h1>
        <div class="headline-description">
            <div class="separator">
                <div class="line line-left"></div>
                <div class="dice"><i class="fas fa-dice-six"></i></div>
                <div class="line line-right"></div>
            </div>
            <div class="single-animation">
                <h5>Vous possédez deja un compte ?</h5>
                <a href="connexion" class="btn cta-btn">Connectez-vous !</a>
            </div>
        </div>
    </div>
</section>

<?php

$error = false;
if (!empty($_POST)) {
    $d = $_POST;
    if ($d['user_pass'] != $d['user_pass2']) {
        $error = 'Les 2 mots de passes ne correspondent pas';
    } else {
        if (!is_email($d['user_email'])) {
            $error = 'Veuillez entrer un email valide';
        } else {
            $user = wp_insert_user(array(
                'user_login' => $d['user_login'],
                'user_pass'  => $d['user_pass'],
                'user_email' => $d['user_email'],
                'pseudo_ig' => $d['pseudo_ig'],
                'plateform' => $d['plateforme'],
            ));
            if (is_wp_error($user)) {
                $error = $user->get_error_message();
            } else {
                $msg = 'Vous êtes maintenant inscrit';
                $headers = 'From: ' . get_option('admin_email') . "\r\n";
                wp_mail($d['user_email'], 'Inscription réussie', $msg, $headers);
                $d = array();
                wp_signon($user);
                header('Location:profil');
            }
        }
    }
}
?>
<?php get_header(); ?>

<div class="single">
    <div class="post">

        <?php if ($error) : ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
        <?php endif ?>

        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" class="form-style">
            <label for="user_login">Votre login</label>
            <input class="style-form" type="text" value="<?php echo isset($d['user_login']) ? $d['user_login'] : ''; ?>" name="user_login" id="user_login" placeholder="Votre nom d'utilisateur">

            <label for="user_email">Votre email</label>
            <input class="style-form" type="text" value="<?php echo isset($d['user_email']) ? $d['user_email'] : ''; ?>" name="user_email" id="user_email" placeholder="Votre adresse email">

            <label for="pseudo_ig">Votre pseudo de jeu</label>
            <input class="style-form" type="text" value="<?php get_the_author_meta( 'pseudo_ig', $user->ID ) ?>" name="pseudo_ig" id="pseudo_ig" placeholder="Votre pseudo de jeu">
            
            <span class="select-plateforme"> Plateforme sur laquelle vous jouez ? <br>
            <select for="plateforme" class="ui search dropdown" name="plateforme" value="<?php echo isset($d['plateforme']) ? $d['plateforme'] : ''; ?>" name="plateforme" id="plateforme">
                            <option value="">Select</option>
                            <option value="playstation">Playstation</option>
                            <option value="xbox">Xbox</option>
                            <option value="pc">Pc</option>
            </select>
            </span>

            <span class="select-elo"> elo sur laquelle vous jouez ? <br>
            <select for="elo" class="ui search dropdown" name="elo" value="<?php echo isset($d['elo']) ? $d['elo'] : ''; ?>" name="elo" id="elo">>
                <option value="non-classe">Non-Classe</option>
                <option value="cuivre">Cuivre</option>
                <option value="bronze">Bronze</option>
                <option value="argent">Argent</option>
                <option value="or">Or</option>
                <option value="platine">Platine</option>
                <option value="diamant">Diamant</option>
                <option value="champion">Champion</option>
            </select>
            </span>

            <label for="user_pass">Votre mot de passe</label>
            <input class="style-form" type="password" value="<?php echo isset($d['user_pass']) ? $d['user_pass'] : ''; ?>" name="user_pass" id="user_pass" placeholder="Saisissez un mot de passe">

            <label for="user_pass2">Confirmez votre mot de passe</label>
            <input class="style-form" type="password" value="<?php echo isset($d['user_pass2']) ? $d['user_pass2'] : ''; ?>" name="user_pass2" id="user_pass2" placeholder="Confirmez le mot de passe">

            <a class="link-to" href="/Find6Friends/connexion"> Deja inscrit ? Connectez vous !</a>

            <input type="submit" value="S'inscrire" class="btn-submit-form">

        </form>
                
    </div>
</div>




<?php get_footer() ?>