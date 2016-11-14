<?php
/**
 * Template Name: Artists Index
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists-index">
  <div class="artists-index__links">
    <a href="#" class="artists-index__links--artists">ARTISTS</a>
    <a href="#" class="artists-index__links--browse">BROWSE</a>
  </div>

  <div class="artists-index__wrapper">
  <?php $artists_loop = new WP_Query(array( 'post_type' => 'artist', 'posts_per_page' => -1 ) ); ?>
  <?php while ( $artists_loop->have_posts() ) : $artists_loop->the_post(); ?>
      <a class="artists-index__artwork" href="<?php the_permalink(); ?>">
        <?php $artist_image = get_field('artist_image_1'); ?>
        <img src="<?php echo $artist_image['sizes']['thumbnail']?>" />
        <p class="artists-index__artwork--title"><?php the_field('artist_image_1_title'); ?></p>
        <h2 class="artists-index__artwork--name"><?php the_title(); ?></h2>
      </a>

  <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<?php include 'footer.php' ?>
