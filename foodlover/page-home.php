<?php
	/*
	Template Name: Home page template
	Template Post Type: page
	*/
?>

<?php get_header(); ?>
	<!-- Start Intro Section -->
	<div class="intro" style="background-image: linear-gradient(rgba(29,29,35, 0.95), rgba(29,29,35, 0.95)), url(<?php the_field('intro_bacgkround_imege'); ?>);background-repeat: no-repeat; background-size: 100%; background-position: center; min-height: 100vh;">
		<div class="container">
			<div class="intro__content">
				<div class="intro__left">
					<img src="<?php the_field('intro_image'); ?>" alt="waffles">
				</div>
				<div class="intro__right">
					<h1><?php the_field('intro_title'); ?></h1>
					<p><?php the_field('intro_text'); ?></p>
					<?php if( have_rows('intro_links') ): ?>
					    <?php while( have_rows('intro_links') ): the_row(); ?> 
					    	<a href="<?php the_sub_field('url'); ?>" class="intro__button">
					    		<?php the_sub_field('text'); ?>
					    	</a>
					    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>



	<!-- End Intro Section -->

	<!-- Start About Us Section -->

	<section class="about-us">
		<div class="container">
			<div class="about-us-content">
				<div class="about-us__left">
					<img src="<?php the_field('about_us_image'); ?>" alt="food">
				</div>
				<div class="about-us__right">
					<h2><?php the_field('about_us_title'); ?></h2>
					<p><?php the_field('about_us_text'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- End About Us Section -->

	<!-- Start Food Section -->

	<section class="food">
		<div class="container">
			<div class="food-content" style="background-image: url(<?php the_field('food_bacground'); ?>); background-repeat: no-repeat; background-size: auto auto; min-height: 1693px; width: 100%;">
				<div class="food__one">
					<img src="<?php the_field('food_imege_1'); ?>" alt="">
				</div>
				<div class="food__thwo">
					<img src="<?php the_field('food_imege_2'); ?>" alt="">
				</div>
				<div class="food__three">
					<img src="<?php the_field('food_imege_3'); ?>" alt="">
				</div>
				<div class="food-content__text">
					<h2><?php the_field('food_titele'); ?></h2>
					<p><?php the_field('food_text'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- End Food Section -->

	<!-- Start Gallery Section -->

	<section class="gallery">
		<div class="container">
			<h2><?php the_field('gallery_title'); ?></h2>
			<div class="gallery__content">
				<div class="gallery__row">
					<a href="<?php the_field('gallery_imege_1'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_1'); ?>" alt="">
					</a>
					<a href="<?php the_field('gallery_imege_2'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_2'); ?>" alt="">
					</a>
					<a href="<?php the_field('gallery_imege_3'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_3'); ?>" alt="">
					</a>
					<a href="<?php the_field('gallery_imege_4'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_4'); ?>" alt="">
					</a>
					<a href="<?php the_field('gallery_imege_5'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_5'); ?>" alt="">
					</a>
					<a href="<?php the_field('gallery_imege_6'); ?>" data-lity>
						<img src="<?php the_field('gallery_imege_6'); ?>" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- End Gallery Section -->

	<!-- Start Enjoy Section -->

	<section class="enjoy" style="background-image: url(<?php the_field('enjoy_bacground'); ?>); background-repeat: no-repeat; background-size: 100%;background-position: center; height: 100vh;">
		<div class="enjoy__content">
			<div class="enjoy__content-text">
				<h2><?php the_field('enjoy_title'); ?></h2>
				<p><?php the_field('enjoy_text'); ?></p>
			</div>
		</div>
	</section>

	<!-- End Enjoy Section -->

	<!-- Start Our Menu Section -->

	<section class="our-menu">
		<div class="container">
			<h2>Our Menu</h2>
			<div class="our-menu__card">
				<a href="#" class="our-menu__card-product">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/15.png" alt="">
					<h3>Italian Source Mushroom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
					<span class="price">Price: $12.00</span>
				</a>
				<a href="#" class="our-menu__card-product">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/16.png" alt="">
					<h3>ITALIAN SOURCE MUSHROOM</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
					<span class="price">Price: $12.00</span>
				</a>
				<a href="#" class="our-menu__card-product">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/17.png" alt="">
					<h3>ITALIAN SOURCE MUSHROOM</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
					<span class="price">Price: $12.00</span>
				</a>
			</div>
		</div>
	</section>

	<!-- End Our Menu Section -->

	<!-- Start Best Meal Section -->

	<section class="best-meal">
		<div class="best-meal__imeg">
			<img src="<?php the_field('best_meal_imeges'); ?>" alt="">
		</div>
		<div class="best-meal__text">
			<h2><?php the_field('best_meal_title'); ?></h2>
			<p><?php the_field('best_meal_text'); ?></p>
		</div>
	</section>

	<!-- End Best Meal Section -->

<?php get_footer(); ?>
