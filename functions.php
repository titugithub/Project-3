<?php


get_template_part('/inc/acf');


function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		//Regenerate thumbnail plugin lagbe
		

}
add_action('after_setup_theme', 'halim_setup');



function halim_assets() {
    
    // css


    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font', '//fonts.gstatic.com', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-poppinsss', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'templatemo', get_template_directory_uri() . '/css/templatemo-medic-care.css', array(), '1.0.0', 'all');
   
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );



    // js


    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollspy', get_template_directory_uri() . '/js/scrollspy.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );


}   
add_action('wp_enqueue_scripts', 'halim_assets');






