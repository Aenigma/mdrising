<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Athena
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

  <div class="athena-footer" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr( get_theme_mod('footer_background_image', get_template_directory_uri() . '/inc/images/footer.jpg' ) ); ?>">
      <div>
          <div class="row">
              <?php get_sidebar('footer'); ?>
          </div>
      </div>


  </div>

  <div class="clear"></div>

  <div class="site-info">

      <div class="row">

          <div class="athena-copyright">
              <?php echo esc_attr( get_theme_mod( 'copyright_text', __( 'Copyright Company Name 2015', 'athena' ) ) ); ?>
          </div>

          <div id="authica-social">

              <?php if( get_theme_mod( 'facebook_url', 'http://facebook.com' ) != '' ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'facebook_url', 'http://facebook.com' ) ); ?>" target="_BLANK" class="athena-facebook">
                  <span class="fa fa-facebook"></span>
              </a>
              <?php endif; ?>


              <?php if( get_theme_mod( 'gplus_url', 'http://gplus.com' ) != '' ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'gplus_url', 'http://gplus.com' ) ); ?>" target="_BLANK" class="athena-gplus">
                  <span class="fa fa-google-plus"></span>
              </a>
              <?php endif; ?>

              <?php if( get_theme_mod( 'instagram_url', 'http://instagram.com' ) != '' ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'instagram_url', 'http://instagram.com' ) ); ?>" target="_BLANK" class="athena-instagram">
                  <span class="fa fa-instagram"></span>
              </a>
              <?php endif; ?>

              <?php if( get_theme_mod( 'linkedin_url', 'http://linkedin.com' ) != '' ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'linkedin_url', 'http://linkedin.com' ) ); ?>" target="_BLANK" class="athena-linkedin">
                  <span class="fa fa-linkedin"></span>
              </a>
              <?php endif; ?>


              <?php if( get_theme_mod( 'pinterest_url', 'http://pinterest.com' ) != '' ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'pinterest_url', 'http://pinterest.com' ) ); ?>" target="_BLANK" class="athena-pinterest">
                  <span class="fa fa-pinterest"></span>
              </a>
              <?php endif; ?>

              <?php if( get_theme_mod( 'twitter_url', 'http://twitter.com' ) ) : ?>
              <a href="<?php echo esc_url( get_theme_mod( 'twitter_url', 'http://twitter.com' ) ); ?>" target="_BLANK" class="athena-twitter">
                  <span class="fa fa-twitter"></span>
              </a>
              <?php endif; ?>

          </div>

          <?php $menu = wp_nav_menu( array (
              'theme_location'    => 'footer',
              'menu_id'           => 'footer-menu',
              'menu_class'        => 'athena-footer-nav' ,

              ) ); ?>

          <p>
            Designed with ❤️ by Joshua Thomas, <a href="https://github.com/Aenigma" rel="designer">Kevin Raoofi</a>, and Ron O'Keefe based on <a href="https://smartcatdesign.net" rel="designer">Athena by SmartCat</a>
          </p>

      </div>

      <div class="scroll-top alignright">
          <span class="fa fa-chevron-up"></span>
      </div>



  </div><!-- .site-info -->

</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
