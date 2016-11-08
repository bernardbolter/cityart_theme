<?php
/**
 * Template Name: Artists
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="site-wrapper" id="site-wrap">
  <div class="artists_wrap">
    <h1 class="artist_heading">City Art Gallery Artists</h1>

    <?php $my_query = new WP_Query('category_name=artists&posts_per_page=-1');
    ?>

    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
      <div class="art_wrapper">
    	<p class="art_name"><?php the_title(); ?></p>
      <div class="image">
      <?php the_post_thumbnail( 'large' ); ?>
      </div>
      </div>
    <?php endwhile; ?>

  </div>
</div>

<?php include 'footer.php' ?>
