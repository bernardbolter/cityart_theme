<?php
/**
 * Template Name: Single Exhibition
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

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="exhibition__wrap">
      <div class="exhibition__nav">
        <?php $past_shows = get_posts('numberposts=-1&offset=1&post_type=exhibition'); ?>
        <a href="
        <?php if(!empty($upcoming_or_not)):
          echo get_the_permalink( $past_shows[1]->ID);
          else:
          echo get_the_permalink( $past_shows[0]->ID);
          endif;
          ?>">Current Show</a>
        <?php if(!empty($upcoming_or_not)): ?>
          <a href="<?php echo get_the_permalink( $past_shows[0]->ID); ?>">Upcoming Show</a>
        <?php endif; ?>
        <a href="#" id="past-shows">Past Shows</a>
        <div class="exhibition__nav--pastshows">
          <ul>
          <?php

            foreach($past_shows as $past_show): ?>

              <li><a href="<?php echo get_the_permalink( $past_show->ID); ?>"> <?php echo get_the_title( $past_show->ID); ?></a></li>

           <?php endforeach; ?>
           </ul>
        </div>
      </div> <!-- exhibition__nav -->

      <div class="exhibition__title-wrap">

      <div class="exhibition__title"><?php the_title(); ?> &#8226;
        <?php if(empty($upcoming_or_not)):
                echo 'Current Show';
              else:
                echo 'Upcoming Show';
              endif;
        ?>
      </div>
      <?php if( get_field('exhibition_postcard_back') ): ?>
          <div class="exhibition__postcard-wrap exhibition__postcard-wrap--flex">
        <?php else: ?>
          <div class="exhibition__postcard-wrap">
        <?php endif; ?>

        <div class="exhibition__front">
          <?php $exhibition_postcard = get_field('exhibition_postcard_front'); ?>
          <img src="<?php echo $exhibition_postcard['sizes']['large']?>" />
        </div>


          <?php if( get_field('exhibition_postcard_back') ): ?>
          <div class="exhibition__back">
            <?php $exhibition_postcard_back = get_field('exhibition_postcard_back'); ?>
            <img src="<?php echo $exhibition_postcard_back['sizes']['large']?>" />

          <?php else: ?>
            <div class="exhibition__artists">
                <p class="exhibition__upcoming-title">Opening Recption</p>
                <p class="exhibition__upcoming-date">Friday, <span class="exhibition__upcoming-date--dark"> <?php echo get_field('exhibition_opening_date'); ?></span></p>
                <p class="exhibition__upcoming-time">7-10 PM</p>

              <h1 class="exhibition__artists--title">Featured Artists</h1>
              <?php
              $post_objects = get_field('artist_names_list');

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

            <?php endif; ?>
            

            </div> <!-- exhibition__artists -->
          </div> <!-- exhibition__back -->
        </div> <!-- exhibition_postcard__wrap -->
      </div> <!-- exhibition__title-wrap -->



  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php include 'footer.php' ?>
