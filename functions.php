<?php

function offshore_money(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnail');
    add_theme_support('custom-header');
    
    
    register_nav_menus(array(
        'header-menu'=>'Header Menu',
        'main-menu'=>'Main Menu',
        'footer-menu'=>'Footer menu',
    ));
    
    
    
    
    
    
    
    
    
}

add_action('after_setup_theme','offshore_money');

function my_custom_post(){
    register_post_type('',array(
        $labels = array(
		'name'               =>  'Books', 'post type general name',
		
		'add_new'            =>  'Add New', 'book', 'your-plugin-textdomain',
		'add_new_item'       => 'Add New Book',
		'new_item'           => 'New Book' ,
		'edit_item'          => 'Edit Book',
		'view_item'          => 'View Book', 
                'all_items'          =>  'All Books', 
		'search_items'       =>  'Search Books', 
		'parent_item_colon'  =>'Parent Books:', 
		'not_found'          => 'No books found.',
		'not_found_in_trash' => 'No books found in Trash', 
	),
        'public'             => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
        
        
    ));
    
}
add_action( 'init', 'my_custom_post' );





function register_script_style() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css');
    wp_register_style('font1', 'https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic');
    wp_register_style('all', get_template_directory_uri() . '/css/all.css');
    wp_register_style('toastr', get_template_directory_uri() . '/css/toastr.min.css');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
   // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_register_style('awesome',get_template_directory_uri().  '/css/font-awesome.min.css');

  
    wp_register_script('recaptcha', 'https://www.google.com/recaptcha/api.js');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
    wp_register_script('toastr', get_template_directory_uri() . '/js/toastr.min.js');
    wp_register_script('jquery.main', get_template_directory_uri() . '/js/jquery.main.js');
  

    wp_enqueue_style('stylesheet');
    wp_enqueue_style('font1');
    wp_enqueue_style('all');
    wp_enqueue_style('toastr');
    wp_enqueue_style('style');
    wp_enqueue_style('awesome');
  



    wp_enqueue_script('recaptcha');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('toastr');
    wp_enqueue_script('jquery.main');

}

add_action('wp_enqueue_scripts', 'register_script_style');


function mycustomize($customize) {

    $customize->add_section('heading-section', array(
        'title' => 'Header Option',
        'priority' => '10',
    ));
    $customize->add_setting('skype', array(
        'default' => 'skype:info@offshore.money?call',
        'transport' => 'refresh',
    ));
    $customize->add_control('skype', array(
        'section' => 'heading-section',
        'label' => 'Skype User',
        'type' => 'text',
    ));
    $customize->add_setting('call', array(
        'default' => 'Call Now',
        'transport' => 'refresh',
    ));
    $customize->add_control('call', array(
        'section' => 'heading-section',
        'label' => 'Before Number Text',
        'type' => 'text',
    ));
        $customize->add_setting('phone-number', array(
        'default' => '+1 (888) 558-7655',
        'transport' => 'refresh',
    ));
    $customize->add_control('phone-number', array(
        'section' => 'heading-section',
        'label' => 'Phone Number',
        'type' => 'text',
    ));
   

    $customize->add_setting('logo_upload', array(
        'default' => get_template_directory_uri(). '/images/logo.png',
        'transport' => 'refresh',
    ));
    $customize->add_control(
            new WP_Customize_Image_Control($customize, 'logo_upload', array(
        'section' => 'heading-section',
        'label' => 'Logo alternet text',
        'settings' => 'logo_upload',
            ))
    );


}

add_action('customize_register', 'mycustomize');

