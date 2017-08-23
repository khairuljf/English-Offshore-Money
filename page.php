<?php
get_header();
?>
<!-- content-holder -->


<div class="content-holder">
       <?php
                    while (have_posts()) :the_post();

                        the_content();

                    endwhile;
                    ?>
</div>


</div>
<!-- sidebar -->
<?php get_sidebar(); ?>
</div>
</div>


<!--- footer -->
<?php
get_footer();
?>