<?php
/**
 * Template Name: Exhibitions
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="exhibitions">
<?php $homepage_loop = new WP_Query(array( 'post_type' => 'openings', 'posts_per_page' => -1 ) ); ?>
<?php while ( $homepage_loop->have_posts() ) : $homepage_loop->the_post(); ?>
  <div class="exhibitions__images">
    <h2><?php the_title(); ?></h2>
    <?php $front_image = get_field('exhibition_postcard_front'); ?>
    <img src="<?php echo $front_image['sizes']['large'] ?>" />
    <?php $back_image = get_field('exhibition_postcard_back'); ?>
    <img src="<?php echo $back_image['sizes']['large'] ?>" />
    <div class="exhibitions__images--line"></div>
  </div>
<?php endwhile; wp_reset_query(); ?>
</div>

<?php include 'footer.php' ?>
