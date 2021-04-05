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
			<span class="first-letter">f</span>il d'actualités
		</h2>
		<h1 class="headline">de Rainbow six siege</h1>
		<div class="headline-description">
			<div class="separator">
				<div class="line line-left"></div>
				<div class="dice"><i class="fas fa-dice-six"></i></div>
				<div class="line line-right"></div>
			</div>
			<div class="single-animation">
				<h5>Parés pour rejoindres l'aventure</h5>
				<a href="#" class="btn cta-btn">Cliques ici</a>
			</div>
		</div>
	</div>
</section>

<div class="single">
	<div class="post">
		<h1>Mes informations</h1>
		<form class="form_profil" action="" method="post">
			<p class="">
				<label class="label_profil" for="account_display_name">Nom d'utilisateur&nbsp;<span class="required">*</span></label>
				<input type="text" class="" name="account_display_name" id="account_display_name" value="jeremytillet8" placeholder="Nom affiché">
			</p>
			<div class="clear"></div>

			<p class="">
				<label class="label_profil" for="account_display_name">Pseudo IG&nbsp;<span class="required">*</span></label>
				<input type="text" class="" name="account_display_name" id="account_display_name" value="jeremytillet8" placeholder="Nom affiché">
			</p>
			<div class="clear"></div>

			<p class="">
			<label class="label_profil" for="account_display_name">Plateforme sur laquelle vous jouez &nbsp;<span class="required">*</span></label>
			<select name="plateform" id="plateform-select">
				<option value="">--Selectionnez votre plateforme--</option>
				<option value="dog">Playstation</option>
				<option value="cat">Xbox</option>
				<option value="hamster">PC</option>
			</select>
			</p>

			<p class="">
				<label class="label_profil" for="account_email">Adresse de messagerie&nbsp;<span class="required">*</span></label>
				<input type="email" class="" name="account_email" id="account_email" autocomplete="email" value="jeremytillet8@gmail.com" placeholder="Adresse de messagerie">
			</p>

			
			<p>
				<input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="9d7f4fbe5b"><input type="hidden" name="_wp_http_referer" value="/profil/edit-account"> <button type="submit" class="btn-submit-form" name="save_account_details" value="Enregistrer les modifications">Enregistrer les modifications</button>
				<input type="hidden" name="action" value="save_account_details">
			</p>

		</form>

	</div>
</div>

<?php get_footer(); ?>