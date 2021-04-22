<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if ($user->ID == 0) {
	header('location:login');
}

?>
<?php get_header(); ?>

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline sub-headline-hero">
			<span class="first-letter">V</span>otre
		</h2>
		<h1 class="headline">Espace membres</h1>
		<div class="headline-description">
			<div class="separator">
				<div class="line line-left"></div>
				<div class="dice"><i class="fas fa-dice-six"></i></div>
				<div class="line line-right"></div>
			</div>
			<div class="single-animation">
				<h5>Pour decouvrir l'actualités R6S</h5>
				<a href="actualites-r6s" class="btn cta-btn">Cliques ici</a>
			</div>
		</div>
	</div>
</section>

<?php
$user = wp_get_current_user();
$login = $user->login;

?>

<div class="single">
	<div class="post">
		<form class="form_profil" action="" method="post">
			<p class="">
				<label class="label_profil" for="account_display_name">Nom d'utilisateur&nbsp;<span class="required"></span></label>
				<input type="text" class="" name="account_display_name" id="account_display_name" value="<?php
					global $current_user;
					if (isset($current_user)) {
						echo $current_user->user_login;
					}
					?>" placeholder="Votre nom d'utilisateur" disabled="disabled">
			</p>
			<div class="clear"></div>

			<p class="">
				<label class="label_profil" for="account_pseudo_ig">Pseudo IG&nbsp;<span class="required"></span></label>
				<input type="text" class="" name="account_pseudo_ig" id="account_pseudo_ig" value="<?php global $current_user;
					if (isset($current_user)) {
						echo $current_user->pseudo_ig;
					}
					?>" disabled="disabled">
			</p>
			<div class="clear"></div>

			<p class="">
				<label class="label_profil" for="account_plateforme">Plateforme sur laquelle vous jouez le plus &nbsp;<span class="required">*</span></label>
				<input type="text" style="text-transform: uppercase;" name="account_plateforme" id="account_plateforme" value="<?php global $current_user;
					if (isset($current_user)) {
						echo $current_user->plateforme;
					}
					?>" disabled="disabled">
			</p>

			<p class="">
				<label class="label_profil" for="account_plateforme">Rank &nbsp;<span class="required">*</span></label>
				<input type="text" style="text-transform: uppercase;" name="account_plateforme" id="account_plateforme" value="<?php global $current_user;
					if (isset($current_user)) {
						echo $current_user->elo;
					}
					?>"disabled="disabled">
			</p>

			<p class="">
				<label class="label_profil" for="account_email">Adresse de messagerie&nbsp;<span class="required"></span></label>
				<input type="email" class="" name="account_email" id="account_email" autocomplete="email" value="" placeholder="<?php
					global $current_user;
					if (isset($current_user)) {
						echo $current_user->user_email;
					}
					?>" disabled="disabled">
			</p>


			<p>
			<a href="<?php echo wp_logout_url() ?>"><input type="button" value="Se deconnecter" class="btn-submit-form"></a>
			</p>

		</form>

	</div>
</div>

<?php get_footer(); ?>