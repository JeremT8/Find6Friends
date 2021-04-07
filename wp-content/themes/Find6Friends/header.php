<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head() ?>

<body>
<header>
		<div class="container">
			<nav class="nav">
				<div class="menu-toggle">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
				</div>
				<a href="" class="logo" title="<?= __('Homepage', 'find6friends') ?>">
				<img src="<?= get_theme_mod('logo') ?>" alt=""></a>
				<?php 
				if( is_user_logged_in() ) :
					wp_nav_menu(array (
					'theme_location' => 'header-loggedin',
					'container' => false
					));
					else :
					wp_nav_menu(array (
					'theme_location' => 'header-loggedout',
					'container' => false
							)
						);
					endif;
				?>
			</nav>
		</div>
	</header>
<body>			
	