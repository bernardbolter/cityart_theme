<?php
/**
 * Template Name: Single Exhibition
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="exhibition">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="exhibition__wrap">
      <?php include 'exhibition-navigation.php' ?>
      <div class="exhibition__front">
        <?php $exhibition_postcard = get_field('exhibition_postcard_front'); ?>
        <img src="<?php echo $exhibition_postcard['sizes']['large']?>" />
      </div>
      <div class="exhibition__back">
        <?php if( get_field('exhibition_postcard_back') ): ?>
          <?php $exhibition_postcard_back = get_field('exhibition_postcard_back'); ?>
          <img src="<?php echo $exhibition_postcard_back['sizes']['large']?>" />

        <?php else: ?>
          <div class="exhibition__artists">
            <h1 class="exhibition__artists--title">Featured Artists</h1>
            <?php
            $post_objects = get_field('exhibition_artist_name_dropdown_1');

            // makes a list of all the artists that have profile pages with extra artist at the bottom
            if( $post_objects ): ?>
                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

            <?php if( get_field('extra_artist_name_1') ): ?>

              <p class="exhibition__artists--extra"><?php the_field('extra_artist_name_1'); ?></p>
            <?php endif; ?>

            <?php if( get_field('extra_artist_name_2') ): ?>
              <p class="exhibition__artists--extra"><?php the_field('extra_artist_name_2'); ?></p>
            <?php endif; ?>

            <?php if( get_field('extra_artist_name_3') ): ?>
              <p class="exhibition__artists--extra"><?php the_field('extra_artist_name_3'); ?></p>
            <?php endif; ?>

            <?php if( get_field('extra_artist_name_4') ): ?>
              <p class="exhibition__artists--extra"><?php the_field('extra_artist_name_4'); ?></p>
            <?php endif; ?>

            <?php if( get_field('extra_artist_name_5') ): ?>
              <p class="exhibition__artists--extra"><?php the_field('extra_artist_name_5'); ?></p>
            <?php endif; ?>

          </div> <!-- exhibition__artists -->
        </div> <!-- exhibition__back -->



        <?php endif; ?>
      </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php include 'footer.php' ?>
