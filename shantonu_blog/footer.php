<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shantonu_blog
 */

?>

<!-- footer -->
<footer >
  <div class="footer-wrapper section-padding">
    <div class="container">
      <div class="row">
        <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
          <a href="index.html">SS</a>
          <p class="footer-content">Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
        </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        <div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
          <p class="footer-heading">link</p>
          <ul class="footermenu">
            <li><a href="index.html">about us</a></li>
            <li><a href="index.html">services</a></li>
            <li><a href="index.html">product</a></li>
            <li><a href="index.html">team</a></li>
            <li><a href="index.html">blog</a></li>
          </ul>
        </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
          <p class="footer-heading">find us</p>
          <ul class="footercontact">
            <li><i class="flaticon-mainpage"></i><span>address:</span> One TECHGUT loop, 54100</li>
            <li><i class="flaticon-phone16"></i><span>phone:</span><a href="tel:88 02 8714612"> +88 02 8714612</a></li>
            <li><i class="flaticon-email21"></i><span>e-mail:</span><a href="mailto:support@themerole.com"> support@themerole.com</a></li>
            <li><i class="flaticon-world91"></i><span>web:</span><a href="http://themerole.com/"> www.themerole.com</a></li>
          </ul>
          <i class="flaticon-home78"></i>
        </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
          <p class="footer-heading">recent posts</p>
          <ul class="footerblog">
            <li><a href="#">The Green Fields of Spring</a> <p>13th Jun 2014</p></li>
            <li><a href="#">This is a Video Post</a> <p>18th Nov 2014</p></li>
            <li><a href="#">Satisfaction Lies in the Effort</a> <p>13th Jun 2014</p></li>
          </ul>
        </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="wow zoomIn col-xs-12">
          <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shantonu_blog' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shantonu_blog' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shantonu_blog' ), 'shantonu_blog', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?></p>
          <div class="backtop  pull-right">
            <i class="fa fa-angle-up back-to-top"></i>
          </div>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.creditwrapper -->
</footer><!-- /Footer -->

<!-- MMENU  -->
<nav id="menu">
  <ul>
    <li><a href="index.html">home</a></li>
    <li><a href="index.html">about us</a></li>
    <li><a href="index.html">services</a></li>
    <li><a href="index.html">product</a></li>
    <li><a href="index.html">team</a></li>
    <li><a href="index.html">blog</a>
        <ul>
          <li><a href="blog-full-width.html">full width blog</a></li>
          <li><a href="#">sidebar blog</a></li>
        </ul>
    </li>
    <li><a href="index.html">contact</a></li>
  </ul>
</nav><!-- /#menu -->

</div><!-- /.main -->



<!-- jQuery JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.1.js"></script>

<!-- Modernizr JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-2.6.2.min.js"></script>

<!--Bootatrap JS-->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

<!-- Shuffle JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.shuffle.min.js"></script>


<!-- mmenu -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/mmenu/js/jquery.mmenu.min.js"></script>

<!-- Owl Carosel -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/owl/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

<!-- waypoints JS-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<!-- Counterup JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>

<!-- Easing JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>

<!-- Smooth Scroll JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrolling-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smoothscroll.min.js"></script>

<!-- Custom Script JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<script>
  
    jQuery(window).on('scroll', function(){
        if( jQuery(window).scrollTop()>100 ){
            jQuery('.navbar-default').addClass('navbar-fixed-top');
        } else {
            jQuery('.navbar-default').removeClass('navbar-fixed-top');
        }
    });

</script>




	

<?php wp_footer(); ?>

</body>
</html>
