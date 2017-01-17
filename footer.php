<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meapu_wp
 */

?>

	</div><!-- #content -->
	      <div class="section-wrapper section-wrapper--footer footer">
        <div class="row">
          <div class="small-12 medium-12 large-5 medium-centered column text-center">
            <img src="<?php bloginfo('template_url')?>/img/logos/meapulogo-white.svg" alt="Clean My Space" class="cms-footer-logo">
            
            <a href="get-an-estimate/index.html" class="large button button--invert">Lahjakortti</a>
            
            <a href="tel:+358449883396" class="telephone-number">
              <i class="icon phone-icon"></i>
              010 3259 830
            </a>
          </div>
        </div>

        <div class="row footer__links">
          <div class="medium-4 columns">
            <!--<p>
              <strong>Services</strong>
              <br>
              <nav><a id="menu-item-282" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-282" href="cleaning-services-gta/index.html#condo-cleaning-service">Condo Cleaning Services</a></li>
<a id="menu-item-283" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-283" href="cleaning-services-gta/index.html#house-cleaning-service">House Cleaning Services</a></li>
<a id="menu-item-284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-284" href="cleaning-services-gta/index.html#office-cleaning-service">Office Cleaning Services</a></li>
<a id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296" href="cleaning-services-gta/index.html">Cleaning Services</a></li>
</nav>            </p>-->
          </div>

          <div class="medium-4 columns">
            <!--<p>
              <strong>About</strong><br>
              <nav><a id="menu-item-286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286" target="_blank" href="https://www.facebook.com/CleanMySpace">Like Clean My Space on Facebook</a></li>
<a id="menu-item-297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-297" href="about-cms/index.html">About Clean My Space</a></li>
<a id="menu-item-288" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288" target="_blank" href="http://www.youtube.com/user/cleanmyspace">Watch Us on YouTube!</a></li>
<a id="menu-item-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496" href="melissa-maker/index.html">Melissa Maker</a></li>
</nav>            </p>-->
          </div>

          <div class="medium-4 columns">
            <!--<p>
              <strong>Other</strong><br>
              <nav><a id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290" href="contact-cms/index.html">Contact Clean My Space</a></li>
<a id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291" href="cleaning-products/index.html">Cleaning Products</a></li>
<a id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292" href="cleaning-media/index.html">Media</a></li>
<a id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293" href="cleaning-faqs/index.html">FAQs</a></li>
</nav>            </p>-->
          </div>
        </div>

        <div class="row">
          <!--<div class="large-12 columns footer__social-links">
            <a href="http://www.youtube.com/user/cleanmyspace" target="_blank"><i class="icon youtube-icon"></i></a>
            <a href="https://www.facebook.com/CleanMySpace" target="_blank"><i class="icon facebook-icon"></i></a>
            <a href="https://twitter.com/cleanmyspace" target="_blank"><i class="icon twitter-icon"></i></a>
            <a href="https://plus.google.com/+cleanmyspace/" target="_blank"><i class="icon google-icon"></i></a>
            <a href="https://www.linkedin.com/company/clean-my-space" target="_blank"><i class="icon linkedin-icon"></i></a>
          </div>-->
        </div>

        <div class="row">
          <div class="large-12 columns">
            <p class="text-center footer__copyright">© 2016 Meapuoy. - All Rights Reserved -<a href="privacy-statement/index.html">Privacy Statement</a></p>
          </div>
        </div>
      </div>
          </div>
      </div>
</div>

<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/min/meapu.js'></script>
<!--is_frontpage load this script-->
<?php if (is_front_page()): ?>
    <script>
      cmsVid = document.querySelector('.covervid-wrapper')

      if(device.desktop()) {
        coverVid(document.querySelector('.covervid-video'), 1280, 720);
      } else {
        cmsVid.parentNode.removeChild(cmsVid);
      }
    </script>
    <?php endif; ?>
	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'meapu_wp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'meapu_wp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'meapu_wp' ), 'meapu_wp', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> .site-info 
	</footer> #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
