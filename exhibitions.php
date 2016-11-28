<?php
/**
 * Template Name: Exhibitions
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="exhibition">
<?php
// get latest post ID and see if the upcoming box is checked
$latest_exhibition = get_posts("post_type=exhibition&numberposts=1");
$latest_id = $latest_exhibition[0]->ID;
$upcoming_or_not = get_field('upcoming', $latest_id);
?>

<?php $exhibition_loop = new WP_Query(array( 'post_type' => 'exhibition', 'posts_per_page' => 1 ) ); ?>
<?php while ( $exhibition_loop->have_posts() ) : $exhibition_loop->the_post(); ?>

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
    </div> <!-- exhibition__wrap -->
    <?php endwhile; wp_reset_query(); ?>
  </div> <!-- exhibition -->

<?php include 'footer.php' ?>
