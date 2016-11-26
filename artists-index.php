<?php
/**
 * Template Name: Artists Index
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists-index">
  <div class="artists-index__navigation">
    <div class="artists-index__artists">
      <a href="#" id="artists-sorting-header" class="artists-index__artists--header">Artists<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
        <div class="artists-index__artists--link-wrap">
          <a href="#" class="artists-index__links">Thumbnail <span class="artists-index__square"></span></a>
          <a href="#" class="artists-index__links">List <span class="artists-index__square"></span></a>
      </div>
    </div>
    <div href="#" class="artists-index__artwork">
      <a href="#" id="artwork-sorting-header" class="artists-index__artwork--header">Artwork<img src="<?php echo get_template_directory_uri(); ?>/img/chevron-outline.png" /></a>
      <div class="artists-index__artwork--link-wrap">
        <a href="#" class="artists-index__links">All <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Ceramics <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Mixed Media <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Jewelry <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Paintings <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Sculpture <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Photography <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Drawings <span class="artists-index__square"></span></a>
        <h3>Sort By</h3>
        <a href="#" class="artists-index__links">Recently Added <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Title A-Z <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Title Z-A <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Artist A-Z <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Artist Z-A <span class="artists-index__square"></span></a>
        <a href="#" class="artists-index__links">Random <span class="artists-index__square"></span></a>
      </div>
    </div>
  </div>

  <div class="artists-index__wrapper">
  <?php $artists_loop = new WP_Query(array( 'post_type' => 'artist', 'posts_per_page' => -1 ) ); ?>
  <?php while ( $artists_loop->have_posts() ) : $artists_loop->the_post(); ?>
      <a class="artists-index__artlist" href="<?php the_permalink(); ?>">
        <?php $artist_image = get_field('artist_image_1'); ?>
        <img src="<?php echo $artist_image['sizes']['thumbnail']?>" />
        <p class="artists-index__artlist--title"><?php the_field('artist_image_1_title'); ?></p>
        <p class="artists-index__artlist--info"><?php the_field('artist_image_1_info'); ?></p>
        <h2 class="artists-index__artlist--name"><?php the_title(); ?></h2>
      </a>

  <?php endwhile; wp_reset_query(); ?>
  </div>
</div>

<?php include 'footer.php' ?>
