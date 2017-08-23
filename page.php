<?php
get_header();
?>
<!-- content-holder -->


<?php if (is_front_page()) : ?>

    <div class="banner_outer">
        <img src="<?php echo( get_header_image() ); ?>" alt="Banner" class="img-responsive">

    </div>
    <?php echo do_shortcode('[banner-service]'); ?>
    <?php echo do_shortcode('[business-area]'); ?>

                


    <!-- //banner -->
    
    
    
    
    
    <div class="message_panel text-center">
        <h3>Get a free consultation and start saving money!</h3>
        <a href="https://lc.chat/now/7419011/9" class="btn btn-danger">GET YOUR QUOTE TODAY!<i class="glyphicon-triangle-right glyphicon"></i></a>
    </div>
    <div class="full_panel testimonials">
        <h3 class="text-center">What do our clients think about our services?</h3>
        <div class="col-md-6">
            <div class="testi_text"><span class="testi_arrow"></span>
                <p>"This type of service is highly recommended to always do with a professional, because many times you think you can do it on your own, but sometimes you need companies like Offshore.Money. This company helped me to have my own banking software as well as I was able to open a company in the United States and the United Kingdom. the time it took to open was 7-10 business days and they then gave me advice on how to open a bank account in the United States and in Europe. Having international accounts today is very good when you have a global business. "</p>
            </div>
            <div class="testi_author">
                <h5>Eric Cardone</h5>
                <p class="designation">CEO - Energy Comfort Systems LLC</p></div>
        </div>
        <div class="col-md-6">
            <div class="testi_text"><span class="testi_arrow"></span>
                <p>"There was a time when I invested in the stock market, but did not have the results that I wished for. One of the things that happened to me is that I imagined that to be successful I had to be watching the stocks every minute, and reading the news pages about investments and that really effected me sleep and took a long time, until Offshore.Money taught me that looking at the stocks for just 2 hours per month, I could have increased my investments and with their help, I am now investing in companies that are increasing. " I hope you can do as well as I did!"<br>
                </p>
            </div>
            <div class="testi_author">
                <h5>Victoria Martinez </h5>
                <p class="designation">CEO - Depi4ever S.A.</p></div>
        </div>
        <div class="clearfix"></div>




    <?php endif; ?>







    <?php if (!is_home() && !is_front_page()) : ?>

        <div class="main-holder">
            <div class="main-frame"> 
                <!-- content -->
                <div id="content"> 
                    <!-- intro-block -->
                    <?php
                    $prefix = 'clean_';
                    $title = get_post_meta(get_the_ID(), $prefix . 'title-text', true);
                    ?>

                    <?php
                    if (is_page('terms-conditions') == false) {
                        ?>
                        <div class="intro-block"> 
                            <img class="full_width"  alt="image description" src="<?php echo get_the_post_thumbnail_url(); ?>">
                            <div class="heading">
                                <h1><?php echo $title; ?></h1>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                <?php endif; ?>


                <div class="content-holder">
                    <?php
                    while (have_posts()) :the_post();

                        the_content();

                    endwhile;
                    ?>
                </div>


            </div>
            <!-- sidebar -->

            <?php if (!is_home() && !is_front_page()) : ?>

                <?php get_sidebar(); ?>

            <?php endif; ?>


        </div>
    </div>
<?php echo do_shortcode('[offer-list]'); ?>

    <!--- footer -->
    <?php
    get_footer();
    ?>