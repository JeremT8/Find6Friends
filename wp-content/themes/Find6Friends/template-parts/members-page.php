<?php
/*
Template Name: member-page
*/
?>

<?php get_header();?>

<section class="hero" id="hero">
		<div class="container">
			<h2 class="sub-headline sub-headline-hero">
				<span class="first-letter">V</span>oici la liste 
			</h2>
			<h1 class="headline">de tous nos membres</h1>
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

	<div class="animate-left member-page-list">
		<?php $users = get_users();
		shuffle($users);
			foreach( $users as $user  ) { ?>
				<div class="member-page-info">
					<?php echo get_avatar( get_current_user_id(), 32 ); ?>
				<p class="list-member list-member-username">	 Nom d'utilisateur :  <br><span class="result-member"><?php echo $user->display_name; ?></span> </p>
				<p class="list-member list-member-pseudo">	 Pseudo IG :  <br> <span class="result-member"><?php echo $user->pseudo_ig; ?></span></p>
				<p class="list-member list-member-plateform">	 Plateforme :  <span class="result-member"><br> <?php echo $user->plateforme; ?></span></p>
				<p class="list-member list-member-elo">	 Rang IG :  <span class="result-member"><br> <?php echo $user->elo; ?></span></p>
						
				</div>

				<?php	
				}
			
				
				?>

	</div>


<?php get_footer(); ?>
