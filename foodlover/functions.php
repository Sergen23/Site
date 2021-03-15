
<?php 

	// add_theme_support('custom-logo');
	add_action( 'after_setup_theme', function(){
		register_nav_menus( [
			'header_menu' => 'Header Menu',
			'footer_menu' => 'Footer Menu'
		] );
	} );

	// Start CSS
	add_action('wp_enqueue_scripts', 'foodlover_style' );
	function foodlover_style() {
		wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );
		wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
		wp_enqueue_style( 'litycss', get_template_directory_uri() . '/assets/css/lity.min.css' );
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), $version);
	}

	// Start JS
	add_action('wp_enqueue_scripts', 'foodlover_scripts' );
	function foodlover_scripts() {
	$version = '0.0.0.0';
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), $version, true );
		wp_enqueue_script( 'lityjs', get_template_directory_uri() . '/assets/js/lity.min.js', array(), $version, true );
		wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true );
	}

	// Start Global Page ACF
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();
	
	}