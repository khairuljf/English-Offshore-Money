



<div class="full_panel text-center"> 
    <a href="<?php echo site_url('our-services') ?>" class="btn btn-danger">See more about our services!<i class="glyphicon-triangle-right glyphicon"></i></a> 
</div>
<footer id="footer">
    <div class="footer_nav_outer text-center">
        <?php wp_nav_menu(array(
                                    'theme_location'=>'footer-menu',
                                    'menu_class'=>'foot_nav nav navbar-nav',
                                    'container_class' => '', /* add div with class before ul */
                                    
                                )) ?>
        
        
        
        <div class="clearfix"></div>
        <p class="copyright">&copy;<?php echo get_theme_mod('copyright') ?> <a href="<?php echo site_url('our-services'); ?>">Privacy policy</a> -  <a href="<?php echo site_url('terms-conditions') ?>">Terms & conditions</a></p>
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 7419011;
            window.__lc.chat_between_groups = false;

            (function () {
                var lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(lc, s);
            })();
        </script>
        <!-- End of LiveChat code -->
    </div>
</footer>
</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 


<!-- Include all compiled plugins (below), or include individual files as needed --> 


<script>
    $(document).ready(function (e) {
        $("form#quoteForm").submit(function () {
            $("input#btnSubmit").attr('disabled', true);
            $("input#btnSubmit").val('Please wait...');
            var aUrl = 'quote.php?xAction=sendMail&' + $("form#quoteForm").serialize();
            $.ajax({
                type: 'POST',
                url: aUrl,
                success: function (data) {
                    $("input#btnSubmit").attr('disabled', false);
                    $("input#btnSubmit").val('Get Quote');
                    if (data == 'OK') {
                        quoteForm.reset();
                        toastr.success('Thank you for contacting us. We will response shortly.');
                    } else if (data == 'SPAM') {
                        toastr.error('Hey! Spammer get out of my website');
                    } else if (data == 'INVALID') {
                        toastr.error('Please proof you are not robot');
                    } else {
                        toastr.error('An error occured. Please try again later.');
                    }

                }
            });
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
