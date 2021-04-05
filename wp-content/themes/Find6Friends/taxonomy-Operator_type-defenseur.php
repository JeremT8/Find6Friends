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
						<h1 class="headline headline-dark">Defenseur</h1>
					</div>
					<?php while(have_posts()): the_post(); ?>
					<div class="image-group animate-left">
					<a class="link-to" href="<?php the_permalink() ?>"><h3 style="margin-bottom: 2px;"><?php the_title() ?></h3></a>
					<a href="<?php the_permalink() ?>">
						<?php $img_attribs = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); // returns an array
							if( $img_attribs ) {
							?> 
							<img src="<?php echo $img_attribs[0]; ?>" width="300" height="300">
						<?php } ?>
					</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
</section>
<?php get_footer() ?>