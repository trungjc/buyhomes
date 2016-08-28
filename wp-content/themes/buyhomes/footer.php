<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whispli
 */

?>
<div class="light-bg footer"></div>
<div class="wave"></div>
<footer>
        <div class="container-sm">
            <div class="clearfix">
                <span class="search-control pull-right hidden-md hidden-lg">
                   <span class="search-control pull-right">
                            <?php get_search_form() ?>
        
                         </span>
                </span>
                <ul class="social pull-right">
                            <li><a href="<?php echo get_option('facebook_link')?>" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('twitter_link')?>" title="twiter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('google_plus')?>" title="google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('skype_link')?>" title="skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('instagram')?>" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                     <?php

                     wp_nav_menu( array(
                        'menu' => 'footer_primary_menu'
                    ) ); ?>
                               
               
            </div>
            <?php if ( is_active_sidebar( 'footer-2' )  ) : ?>
                        <div id="footer2-widget" class="footer-widget widget-area info" role="complementary">
                            <?php dynamic_sidebar( 'footer-2'); ?>
                        </div><!-- .sidebar .widget-area -->
             <?php endif; ?>
                
        </div>
    </footer>
<?php wp_footer(); ?>
<?php if (!empty(get_option('google_analytic')))  {?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo get_option('google_analytic')?>', 'auto');
        ga('send', 'pageview');

    </script>
<?php } ?>
</body>
</html>
