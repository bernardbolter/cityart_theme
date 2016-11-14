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
<div class="<?php if(get_field('landscape_or_portrait'))
          {
            echo "homepage homepage__portrait";
          }
          else
          {
            echo "homepage homepage__landscape";
          } ?>">

  <a href="<?php echo home_url(); ?>/exhibitions">
    <?php $home_image = get_field('exhibition_artwork'); ?>
    <img src="<?php echo $home_image['sizes']['large'] ?>" />
    <h1 class="homepage__image--artist">Featured art this month: <?php the_field('exhibition_artwork_title'); ?> by <?php the_field('exhibition_artwork_artist_name'); ?>, <?php the_field('exhibition_artwork_info'); ?></h1>
  </a>
  <div class="<?php if(get_field('landscape_or_portrait'))
    {
      echo "homepage__info homepage__info--portrait";
    }
    else
    {
      echo "homepage__info homepage__info--landscape";
    } ?>">
    <h1 class="homepage__info--title">NEW GROUP SHOW <span class="homepage__info--date"><?php the_field('exhibition_dates'); ?> </span></h1>
    <h2 class="homepage__info--reception">Opening Reception <span class="homepage__info--time">FRI . <?php the_field('exhibition_opening_date'); ?> . 7-10pm</span></h2>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<div class="homepage__footer">
  <div class="homepage__contact">
    <h3 class="homepage__contact--text">828 Valencia Street</h3>
    <h3 class="homepage__contact--text">San Francisco</h3>
    <h3 class="homepage__contact--text">415-970-9900</h3>
  </div>
  <div class="homepage__email">
    <h4 class="homepage__email--signup">Sign up for our e-mail list</h4>
    <input type="text" class="homepage__email--input" name="EMAIL_TWO" id="home-email-imput" placeholder="" spellcheck="false">
    <button type="submit" id="home-button-input" class="homepage__email--button">JOIN</button>
  </div>
</div>



<?php include 'footer.php' ?>
