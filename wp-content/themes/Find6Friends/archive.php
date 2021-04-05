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
<div class="archive-post">
	<?php

	if (have_posts()) :

		// If there are posts matching the query then start the loop
		while (have_posts()) : the_post();

			// the code between the while loop will be repeated for each post
	?>
			<div class="container article">
				<h2 class="title-article" id="post-<?php the_ID(); ?>"><a class="title-article" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php $img_attribs = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail'); // returns an array
				if ($img_attribs) {
				?>
					<img src="<?php echo $img_attribs[0]; ?>" width="300" height="300">
				<?php } ?>
				<div class="extrait-article"><?php the_excerpt() ?>
					<p class="date-author">Publié par : <?php the_author(); ?></p>
				</div>
			</div>
			<?php

		// Stop the loop when all posts are displayed
		endwhile;

	// If no posts were found
	else :
			?>
			<p>Sorry no posts matched your criteria.</p>
		<?php
	endif;
		?>
	
</div>

<?php get_footer() ?>