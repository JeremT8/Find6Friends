<?php get_header() ?>
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


<section class="discover-agent">
		<div class="container">
			<div class="story-info">
				
				<div class="story-description animate-right">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">L</span>es
						</h2>
						<h1 class="headline headline-dark">Attaquants</h1>
					</div>
					<?php while(have_posts()): the_post(); ?>
					<div class="image-group padding-right animate-left">
					<h3><?php the_title() ?></h3>
					<a href="<?php the_permalink() ?>">
						
						<img src="<?php the_post_thumbnail() ?>" alt="">
					</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
</section>
<?php get_footer() ?>