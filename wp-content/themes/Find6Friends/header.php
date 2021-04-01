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
				<a href="<?php home_url('/') ?>" class="logo" title="<?= __('Homepage', 'find6friends') ?>">
				<img src="<?= get_theme_mod('logo') ?>" alt=""></a>
				<?php wp_nav_menu(array (
					'theme_location' => 'header',
					'container' => false
				))
				?>
			</nav>
		</div>
	</header>
<body>			
	