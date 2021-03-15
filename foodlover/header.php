<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<?php wp_head(); ?>

</head>
<body>
	<!-- Start Header Section  -->
	<header class="header">
		<div class="container">
			<nav class="nav">
				<div class="nav__list">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menus</a></li>
						<li><a href="#">Offers</a></li>
					</ul>
				</div>
				<a href="#" class="nav__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="logo Food Lover">
				</a>
				<div class="nav__list-bottom">
					<ul>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>
				<div class="nav__burger">
					<span></span>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Section -->