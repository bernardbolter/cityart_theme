<?php
/**
 * Template Name: Artists Index
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists-index">

  <?php include 'artists-navigation.php' ?>

  <div id="artwork-loop" class="artists-index__wrapper">
  <?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' ); ?>
  <?php $artists_loop = new WP_Query(array( 'post_type' => 'artist', 'posts_per_page' => -1, 'orderby'=>'title' ) ); ?>
  <?php while ( $artists_loop->have_posts() ) : $artists_loop->the_post(); ?>
      <a class="artists-index__artlist" href="<?php the_permalink(); ?>">
        <?php $artist_image = get_field('artist_image_1'); ?>
        <img src="<?php echo $artist_image['sizes']['thumbnail']?>" />
        <h2 class="artists-index__artlist--name"><?php the_title(); ?></h2>
      </a>
      <?php remove_filter( 'posts_orderby' , 'posts_orderby_lastname' ); ?>
  <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<?php include 'footer.php' ?>
