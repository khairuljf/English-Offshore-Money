<?php

function offshore_money(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    $args = array(
	'default-image' => get_template_directory_uri() . 'images/banner.jpg',
);
add_theme_support( 'custom-header', $args );
 
    register_nav_menus(array(
        'header-menu'=>'Header Menu',
        'main-menu'=>'Main Menu',
        'footer-menu'=>'Footer menu',
    ));
    
    

}

add_action('after_setup_theme','offshore_money');

function create_post_type() {


  
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Our Service',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
    
    register_post_type('merchant_service', array(
        'labels' => array(
            'name' => 'Merchant Service',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
    register_post_type('company_post', array(
        'labels' => array(
            'name' => 'Company Page',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
      register_post_type('bankaccountpost', array(
        'labels' => array(
            'name' => 'Bank Account Page',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
      register_post_type('banner_service', array(
        'labels' => array(
            'name' => 'Banner Service',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
       register_post_type('banner_service', array(
        'labels' => array(
            'name' => 'Banner Service',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
            register_post_type('business-area', array(
        'labels' => array(
            'name' => 'Business Area',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
       register_post_type('invest-page', array(
        'labels' => array(
            'name' => 'Invesment Post',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
       register_post_type('franchises-page', array(
        'labels' => array(
            'name' => 'Franchises Post',
             'all_items'=>'All Service'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
    
    register_post_type('offer', array(
        'labels' => array(
            'name' => 'Our Offer',
             'all_items'=>'All Offer'
        ),
        'public' => true,
        'supports' => array('title',),
        'menu_icon'=>'dashicons-welcome-write-blog',
            )
    );
    
    

 
}

add_action('init', 'create_post_type');


include 'inc/shortcode.php';

function default_menu() {
    echo '<ul class="nav navbar-nav">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}


/* Include CMB2 meta box */
include 'metabox/init.php';
include 'metabox/functions.php';


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

    
    $customize->add_section('footer-section', array(
        'title' => 'Footer Option',
        'priority' => '120',
    ));
    $customize->add_setting('copyright', array(
        'default' => '2016-2017 Offshore Money. All rights reserved.',
        'transport' => 'refresh',
    ));
    $customize->add_control('copyright', array(
        'section' => 'footer-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));

}

add_action('customize_register', 'mycustomize');

