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
<div class="main single">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<p class="post-info">
					Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
				</p>
				<?php $img_attribs = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); // returns an array
							if( $img_attribs ) {
							?> 
							<img src="<?php echo $img_attribs[0]; ?>" width="auto" height="auto">
						<?php } ?>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>


<?php get_footer() ?>