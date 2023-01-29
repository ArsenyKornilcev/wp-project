<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <link rel="stylesheet" href="css/style.min.css" /> -->
		<title>Home</title>
        <?php wp_head(); ?>
	</head>
	<body>
		<header class="header light-bg">
			<nav class="menu menu_left">
				<ul class="menu__list">
					<li class="menu__list-item active"><a href="<?= get_home_url(); ?>">Home</a></li>
					<li class="menu__list-item"><a href="#about">About Us</a></li>
					<li class="menu__list-item"><a href="#team">Team</a></li>
				</ul>
			</nav>
			<div class="header__logo">
				<?php the_custom_logo(); ?>
			</div>
			<nav class="menu menu_right">
				<ul class="menu__list">
					<li class="menu__list-item"><a href="#services">Services</a></li>
					<li class="menu__list-item"><a href="#">Blog</a></li>
					<li class="menu__list-item"><a href="#contact">Contact Us</a></li>
				</ul>
			</nav>

			<!-- MOBILE -->
			<div class="menu__hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="menu_mobile">
				<ul class="menu__list">
					<li class="menu__list-item"><a href="<?= get_home_url(); ?>">Home</a></li>
					<li class="menu__list-item"><a href="#about">About Us</a></li>
					<li class="menu__list-item"><a href="#team">Team</a></li>
					<li class="menu__list-item"><a href="#services">Services</a></li>
					<li class="menu__list-item"><a href="#">Blog</a></li>
					<li class="menu__list-item"><a href="#contact">Contact Us</a></li>
				</ul>
				<div class="menu__exit"></div>
			</nav>
		</header>