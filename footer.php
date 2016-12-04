</div> <!-- CLOSING OF site-wrapper CLASS AT THE BOTTOM ON NAVIGATION FILE -->
    <footer class="footer">
      <div class="footer__icons">
        <a href="https://www.facebook.com/cityartgallery.sf/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_icon.png" /></a>
        <a href="https://twitter.com/sfcityart"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" /></a>
        <a href="https://www.instagram.com/explore/locations/1637514/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_icon.png" /></a>
      </div>
      <p class="footer__info">828 Valencia Street &#8226; San Francisco <span class="footer__hide">&#8226;</span> <span class="footer__break">415-970-9900</span></p>
    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mashup.js"></script>
    <?php wp_footer(); ?>

    <?php if ( is_singular( 'artist' ) ) { ?>
    <script type="text/javascript">
    (function($) {
      window.artist_image_data = [];

      window.artist_image_data.push([
        '<?php echo $image_1_url ?>',
        '<?php the_field('artist_image_1_title'); ?>',
        '<?php the_field('artist_image_1_info'); ?>',
        '<?php echo $image_2_url ?>',
        '<?php the_field('artist_image_2_title'); ?>',
        '<?php the_field('artist_image_2_info'); ?>',
        '<?php echo $image_3_url ?>',
        '<?php the_field('artist_image_3_title'); ?>',
        '<?php the_field('artist_image_3_info'); ?>',
        '<?php echo $image_4_url ?>',
        '<?php the_field('artist_image_4_title'); ?>',
        '<?php the_field('artist_image_4_info'); ?>',
        '<?php echo $image_5_url ?>',
        '<?php the_field('artist_image_5_title'); ?>',
        '<?php the_field('artist_image_5_info'); ?>',
        '<?php echo $image_6_url ?>',
        '<?php the_field('artist_image_6_title'); ?>',
        '<?php the_field('artist_image_6_info'); ?>',
        '<?php echo $image_7_url ?>',
        '<?php the_field('artist_image_7_title'); ?>',
        '<?php the_field('artist_image_7_info'); ?>',
        '<?php echo $image_8_url ?>',
        '<?php the_field('artist_image_8_title'); ?>',
        '<?php the_field('artist_image_8_info'); ?>',
        '<?php echo $image_9_url ?>',
        '<?php the_field('artist_image_9_title'); ?>',
        '<?php the_field('artist_image_9_info'); ?>'
      ]);

    })(jQuery);
    </script>
    <?php } ?>
  </body>
</html>
