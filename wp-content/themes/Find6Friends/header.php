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
				<a href="<?= home_url('/') ?>" class="logo" title="<?= __("Homepage", "F6F")?>">
				<img src="<?= get_theme_mod('logo') ?>" alt="">
				</a>
				<ul class="nav-list">
					<li class="nav-item">
						<a href="index.html" class="nav-link active">ACCUEIL</a>
					</li>
					<li class="nav-item">
						<a href="/assets/agent-r6.html" class="nav-link">AGENTS R6</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">NOS MEMBRES</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Actualites R6</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">S'INSCRIRE</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">CONNEXION</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>