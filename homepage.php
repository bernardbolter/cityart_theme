<?php
/**
 * Template Name: Home Page
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>
<?php $homepage_loop = new WP_Query(array( 'post_type' => 'openings', 'posts_per_page' => 1 ) ); ?>
<?php while ( $homepage_loop->have_posts() ) : $homepage_loop->the_post(); ?>
<div class="homepage">
  <a href="<?php echo home_url(); ?>/exhibitions" class="homepage__image">
    <?php the_post_thumbnail(); ?>
    <h1 class="homepage__image--artist"><i><?php the_field('exhibition_artwork_title'); ?></i> by <?php the_field('exhibition_artwork_artist_name'); ?></h1>
  </a>
  
  <div class="homepage__info">
    <h1 class="homepage__info--title">NEW GROUP SHOW <span class="homepage__info--date"><?php the_field('exhibition_dates'); ?> </span></h1>
    <h2 class="homepage__info--reception">Opening Reception <span class="homepage__info--time">FRI . <?php the_field('exhibition_opening_date'); ?> . 7-10pm</span></h2>
    <h3 class="homepage__info--first">First friday of every month!</h3>
    <p class="homepage__info--hours">Sunday <span class="homepage__info--hours-light">11am-9pm</span></p>
    <p class="homepage__info--hours">Wednesday <span class="homepage__info--hours-light">noon-9pm</span></p>
    <p class="homepage__info--hours">Thursday <span class="homepage__info--hours-light">noon-9pm</span></p>
    <p class="homepage__info--hours">Friday <span class="homepage__info--hours-light">noon-9pm</span></p>
    <p class="homepage__info--hours">Saturday <span class="homepage__info--hours-light">11am-10pm</span></p>
    <p class="homepage__info--closed">Closed Monday &amp; Tuesday</p>
    <p class=homepage__info--december>* except in December</p>
  </div>

  <div class="homepage__email">
    <h4 class="homepage__email--signup">Sign up for our e-mail list</h4>
    <div class="homepage__email--wrap">
      <input type="text" class="homepage__email--input" name="EMAIL_TWO" id="home-email-imput" placeholder="" spellcheck="false">
      <button type="submit" id="home-button-input" class="homepage__email--button">JOIN</button>
    </div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>





<?php include 'footer.php' ?>
