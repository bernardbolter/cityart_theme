</div> <!-- CLOSING OF site-wrapper CLASS AT THE BOTTOM ON NAVIGATION FILE -->
    <footer>

    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mashup.js"></script>
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
        '<?php the_field('artist_image_3_info'); ?>'
      ]);

    })(jQuery);
    </script>
    <?php } ?>
  </body>
</html>
