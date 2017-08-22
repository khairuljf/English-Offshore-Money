    <div class="full_panel lightblue_bg feature_outer">
                        <h3 class="text-center">We offer all of these services for your business!**</h3>
                        <div class="col-md-6">
                            <ul class="list feature_list">
                                <li>Offshore payment processor</li>
                                <li>Opening an offshore bank account</li>
                                <li>Opening an offshore business in the USA</li>
                                <li>Opening a business in England</li>
                                <li>Banking Software script and Bitcoin Script</li>
                                <li>Forex stocks and offshore stocks</li>
                                <li>We control your investments manually</li>
                                <li>Buying successfull franchises</li>
                                <li>Mailbox servies in the United States</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list feature_list">
                                <li>Opening an offshore company in Belize</li>
                                <li>Developing your website or E-commerce</li>
                                <li>Buying offshore licences</li>
                                <li>Open offshore credit cards</li>
                                <li>Online marketing: Capturing clients</li>
                                <li>Virtual office in the United States</li>
                                <li>Professional sales courses</li>
                                <li>Starting your software for businesses</li>
                                <li>Receive a surprise when you complete a consultation</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="full_panel text-center"> <a href="our-services.html" class="btn btn-danger">See more about our services!<i class="glyphicon-triangle-right glyphicon"></i></a> </div>
                    <footer id="footer">
                        <div class="footer_nav_outer text-center">
                            <ul class="foot_nav nav navbar-nav">
                                <li><a href="https://en.offshore.money">Home</a></li>
                                <li><a href="our-services.html">Our Services</a></li>
                                <li><a href="merchant-services-offshore.html">Merchant Services</a></li>
                                <li><a href="bank-account-offshore.html">Bank Accounts</a></li>
                                <li><a href="form-an-offshore-company.html">Form a company now!</a></li>
                                <li><a href="banking-software.html">Banking Software</a></li>
                                <li><a href="investments.html">Investments</a></li>
                                <li><a href="open-your-franchises.html">Franchises</a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <p class="copyright">&copy;2016-2017 Offshore Money.  All rights reserved. <a href="privacy-policy.html">Privacy policy</a> - <a href="terms-conditions.html">Terms & conditions</a></p>
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
