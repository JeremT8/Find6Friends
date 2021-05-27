<?php get_header() ?>
	<!-- HEADER ENDS -->
	<section class="hero" id="hero">
		<div class="container">
			<h2 class="sub-headline sub-headline-hero">
				<span class="first-letter">B</span>ienvenue
			</h2>
			<h1 class="headline">sur Find 6 Friends</h1>
			<div class="headline-description">
				<div class="separator">
					<div class="line line-left"></div>
					<div class="dice"><i class="fas fa-dice-six"></i></div>
					<div class="line line-right"></div>
				</div>
				<div class="single-animation">
					<h5>Parés pour rejoindres l'aventure</h5>
					<a href="inscription" class="btn cta-btn">Cliques ici</a>
				</div>
			</div>
		</div>
	</section>
	<!-- HERO SECTION ENDS -->
	<section class="discover-our-story">
		<div class="container">
			<div class="story-info">
				<div class="story-description padding-right animate-left">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">N</span>otre
						</h2>
						<h1 class="headline headline-dark">concept</h1>
					</div>
					<p>
						Inscrivez-vous, renseignez vos agents R6 préférés, trouver des amies avec lesquels vous pourrez jouer. Suivez l'actualité Rainbow Six, ou profitez de nos partenaires. 
					</p>
					<a href="a-propos" class="btn body-btn">Pour en savoir encore plus, cliquez ici !</a>
				</div>
			</div>
		</div>
	</section>
	<!-- DISCOVER END -->
	<section class="discover-agent">
		<div class="container">
			<div class="story-info">
				
				<div class="story-description animate-right">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">L</span>es
						</h2>
						<h1 class="headline headline-dark">opérateurs de R6S</h1>
					</div>
					
					<p>
					Découvrez la personnalité et la spécialité uniques de chaque opérateur dans Tom Clancy's Rainbow Six Siege.
					</p>
					<a href="operator_type/assaillant" class="btn body-btn">Voir tous les operateurs d'attaque</a>
					<a href="operator_type/defenseur" class="btn body-btn">Voir tous les operateurs de défense</a>
				</div>
			</div>
		</div>
	</section>
	<!-- AGENT SECTION ENDS-->
	<section class="our-members between">
		<div class="container">
			<div class="global-headline">
				<div class="animate-bottom">
					<h1 class="headline">nos membres <br> les plus actifs</h1>

						
				</div>
				
			</div>
			
						
		</div>
		
	</section>
	
	<!-- OUS MEMBERS ENDS-->
	<div class="animate-left member-list">
	<?php $users = get_users();
shuffle($users);
$selectedUsers = [];
for($i=0; $i<2 ; $i++) {
  $selectedUsers[]=$users[$i];
}
			foreach( $selectedUsers as $user  ) { ?>
				<div class="member-info">
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
				<div class="navigate-to-member">
					<a href="membres" class="btn body-btn">Voir tous les membres</a>
				</div>
				
						

	
	
	<?php get_footer() ?>