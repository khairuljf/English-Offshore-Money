<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset") ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <style type="text/css">
            body,td,th {
                font-size: 16px;
            }
        </style>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="main_outer">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid"> 
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-brand" href="<?php bloginfo('home'); ?>">
                                    <img src=" <?php echo get_theme_mod('logo_upload') ?>" alt="Flag Merchant">
                                </a>
                            </div>
                            <div class="head_right pull-right">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'header-menu',
                                    'menu_class' => 'top_nav nav navbar-nav pull-right', /* add class in ul */
                                        //'container' => '', /* when you no need class  id or div before ul  */
                                        // 'container_class' => '', /* add div with class before ul */
                                        //   'container_id' => '', /* add div with id before ul */
                                        //'fallback_cb' => 'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                        //  'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>


                                <div class="clearfix"></div>
                                <ul class="social_links nav navbar-nav pull-right">
                                    <li><a href="https://offshore.money"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="Facebook"></a></li>
                                    <li><a href="https://en.offshore.money"><img src="<?php echo get_template_directory_uri(); ?>/images/tw.png" alt="Twitter"></a></li>
                                    <li><a href="<?php echo get_theme_mod('skype'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gplus.png" alt="Google+"></a></li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="phone_no pull-right"><span><?php echo get_theme_mod('call'); ?> </span><?php echo get_theme_mod('phone-number'); ?></div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <div class="collapse navbar-collapse main_nav" id="defaultNavbar1">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'menu_class' => 'nav navbar-nav',
                                    'fallback_cb' => 'default_menu',
                                ))
                                ?>

                            </div>
                            <!-- /.navbar-collapse --> 

                        </div>
                        <!-- /.container-fluid --> 
                    </nav>

                    
                    

           