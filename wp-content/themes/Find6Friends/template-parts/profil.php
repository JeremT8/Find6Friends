<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if($user->ID == 0){
    header('location:login');
}

?>
<?php get_header();?>

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

           
            
        </div>
    </div>

<?php get_footer(); ?>
