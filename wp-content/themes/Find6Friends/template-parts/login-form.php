<?php
/*
Template Name: Connexion
*/


$error = false; 
if(!empty($_POST)){
    $user = wp_signon($_POST);
    if(is_wp_error($user)){
        $error = $user->get_error_message(); 
    }else{
        header('location:profil');
    }
}else{
    $user = wp_get_current_user();
    if($user->ID != 0){
        header('location:profil');
    }
}
?>
<?php get_header();?>

<section class="hero" id="hero">
		<div class="container">
			<h2 class="sub-headline sub-headline-hero">
				<span class="first-letter">V</span>ous êtes
			</h2>
			<h1 class="headline">déjà de retour ♥</h1>
			<div class="headline-description">
				<div class="separator">
					<div class="line line-left"></div>
					<div class="dice"><i class="fas fa-dice-six"></i></div>
					<div class="line line-right"></div>
				</div>
				<div class="single-animation">
					<h5>Retrouvez les dernieres news ! </h5>
					<a href="#" class="btn cta-btn">C'est partie</a>
				</div>
			</div>
		</div>
	</section>

    <div class="single">
        <div class="post">
            <?php if ($error): ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
            <?php endif ?>

            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" class="form-style">
                <label for="user_login" style="text-align: center;">Nom d'utilisateur</label>
                <input type="text" name="user_login" id="user_login" class="style-form" placeholder="Nom d'utilisateur"> 
                
                <label for="user_password" style="text-align: center;">Votre mot de passe</label>
                <input type="password" name="user_password" id="user_password" class="style-form" placeholder="Votre mot de passe">

				<a class="link-to" href="/Find6Friends/inscription"> INSCRIVEZ VOUS !</a>

                <input type="submit" value="Se connecter" class="btn-submit-form">

            </form>

        </div>
    </div>

<?php get_footer(); ?>
