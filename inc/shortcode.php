<?php

function our_offer($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'title'=>'We offer all of these services for your business!**',
                    ), $atts));
   

    $list = '<div class="full_panel lightblue_bg feature_outer">
             <h3 class="text-center">'.$title.'</h3> ';
    
 $count_posts = wp_count_posts( 'offer' )->publish;
    $q = new WP_Query(
            array('posts_per_page' => $count_posts/2, 'post_type' => 'offer', 'orderby' => '', 'order' =>'ASC')
    );
    
    $list .= '<div class="col-md-6">
        <ul class="list feature_list"> ';
    while ($q->have_posts()) : $q->the_post();
        
    $list .= '  <li>'.get_the_title().'</li>';

    endwhile;
    $list .= '  </ul>
    </div>';
 
     $q = new WP_Query(
            array('posts_per_page' => $count_posts/2, 'post_type' => 'offer', 'orderby' => '', 'order' =>'DESC')
    );
     $list .= '<div class="col-md-6">
        <ul class="list feature_list"> ';
    while ($q->have_posts()) : $q->the_post();
        $list .= '  <li>'.get_the_title().'</li>';



       

    endwhile;
     $list .= '  </ul>
    </div>';
     
    $list .= '';
    wp_reset_query();
    return $list;
}
add_shortcode('offer-list', 'our_offer');


function our_service($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC')
    );

    $list = '<div class="content-holder"><div class="listings">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= ' <h2>'.get_the_title().'</h2>
		<a href="pasarela-de-pagos-offshore.html">
                     <img class="floatRight" src="'.get_the_post_thumbnail_url().'">
                </a>
		<p>'.get_the_content().'</p>
		 ';

    endwhile;
    $list .= '</div></div>';
    wp_reset_query();
    return $list;
}

add_shortcode('our-service', 'our_service');


function merchant_service($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'merchant_service', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('merchant-service', 'merchant_service');

function company_post($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'company_post', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('company-page-post', 'company_post');

function bank_post($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'bankaccountpost', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('bank-account-post', 'bank_post');
function invest_page($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'invest-page', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('investment-post', 'invest_page');

function franchises($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'franchises-page', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('franchises-post', 'franchises');

function bank_software($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'bank-sofware', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="content-holder">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $service = get_post_meta(get_the_ID(), $prefix . 'service1', true);




        $list .= '<h2>'.get_the_title().'</h2>
             '.get_the_content().'
		 ';

    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('banking-software-post', 'bank_software');



function banner_service($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => 3, 'post_type' => 'banner_service', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="banner_container">
                    <div>';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $link = get_post_meta(get_the_ID(), $prefix . 'link', true);




        $list .= '<div class="banner_box_outer">
                            <div class="banner_box">
                                <div class="box_img"><img src="'.get_the_post_thumbnail_url().'" alt="credit card swiper"></div>
                                <div class="box_info"><h4><a href="'.$link.'">'.get_the_title().'</a></h4><p>'.get_the_content().'</p></div>
                            </div>
                        </div>
		 ';

    endwhile;
    $list .= ' <div class="clearfix"></div>
                    </div>
                </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('banner-service', 'banner_service');


function business($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => 4, 'post_type' => 'business-area', 'orderby' => '', 'order' => 'DESC')
    );

    $list = '<div class="services_box">
        <ul class="services">';

    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $link = get_post_meta(get_the_ID(), $prefix . 'arealink', true);




        $list .= '<li>
                <div>
                <div class="services_img">
                    <a href="abrir-franquicias.html">
                        <img src="'.get_the_post_thumbnail_url().'" alt="e-commerce websites" class="img-responsive">
                    </a>
                </div>
                    <h4><a href="open-your-franchises.html">'.get_the_title().'</a></h4>
                    <a href="'.$link.'" class="btn btn-default">I m interested<em class="glyphicon-triangle-right glyphicon"></em></a></div>
            </li>
		 ';

    endwhile;
    $list .= '  </ul>
        <div class="clearfix"></div>
    </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('business-area', 'business');