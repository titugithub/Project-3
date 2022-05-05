<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Setting',
		'menu_title'	=> 'Theme Setting',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> ' Hero Settings',
		'menu_title'	=> 'Hero Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> ' About Settings',
		'menu_title'	=> 'About Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> ' Timeline Settings',
		'menu_title'	=> 'Timeline Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> ' Patients Settings',
		'menu_title'	=> 'Patients Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Section',
		'menu_title'	=> 'Footer Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	
}