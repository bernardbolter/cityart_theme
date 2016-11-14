<?php
/**
 * Template Name: Openings Single
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="openings">
  <?php $artists_loop = new WP_Query(array( 'post_type' => 'openings', 'posts_per_page' => 1 ) ); ?>
  <?php while ( $artists_loop->have_posts() ) : $artists_loop->the_post(); ?>
    
      <a class="artists-index__artwork" href="<?php echo home_url(); ?>/exhibitions">
        <?php $artist_image = get_field('artist_image_1'); ?>
        <img src="<?php echo $artist_image['sizes']['thumbnail']?>" />
        <p class="artists-index__artwork--title"><?php the_field('artist_image_1_title'); ?></p>
        <h2 class="artists-index__artwork--name"><?php the_title(); ?></h2>
      </a>

  <?php endwhile; wp_reset_query(); ?>

</div>

<?php include 'footer.php' ?>
