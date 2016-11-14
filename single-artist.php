<?php
/**
 * Template Name: single-artist
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  // IMAGE DATA
  <?php
  $image_1 = get_field('artist_image_1');
  $image_1_url = $image_1['url'];
  $image_1_size = 'thumbnail';
  $thumb_1 = $image_1['sizes'][ $image_1_size ];

  $image_2 = get_field('artist_image_2');
  $image_2_url = $image_2['url'];
  $image_2_size = 'thumbnail';
  $thumb_2 = $image_2['sizes'][ $image_2_size ];

  $image_3 = get_field('artist_image_3');
  $image_3_url = $image_3['url'];
  $image_3_size = 'thumbnail';
  $thumb_3 = $image_3['sizes'][ $image_3_size ];
  ?>

  <div class="artist" id="post-<?php the_ID(); ?>">

  	<div class="artist__header">
  		<h1 class="artist__header--title"><?php the_title(); ?></h1>

      <?php if( get_field('artist_email') ): ?>
        <h3 class="artist__header--email"><?php the_field('artist_email'); ?></h3>
      <?php endif; ?>

      <?php if( get_field('artist_website') ): ?>
        <h3 class="artist__header--website"><?php the_field('artist_website'); ?></h3>
      <?php endif; ?>

  	</div>

    <div class="artist__images">
      <div class="artist__main-image" id="artwork_hero">
        <img src="<?php echo $image_1_url; ?>" />
        <h2 class="artist__main-image--title"><?php the_field('artist_image_1_title'); ?></h2>
        <p class="artist__main-image--info"><?php the_field('artist_image_1_info'); ?></p>
      </div>
      <div class="artist__thumbs">
        <a href="#" class="artist__thumbs--image" id="artwork_1">
          <img src="<?php echo $thumb_1; ?>" />
        </a>
        <a href="#" class="artist__thumbs--image" id="artwork_2">
          <img src="<?php echo $thumb_2; ?>" />
        </a>
        <a href="#" class="artist__thumbs--image" id="artwork_3">
          <img src="<?php echo $thumb_3; ?>" />
        </a>
      </div>
    </div>

    <div class="artist__bio">
      <h2 class="artist__bio--title">Biography</h2>
      <p class="artist__bio--body">
      <?php if( get_field('artist_profile_picture') ): ?>
        <img src="<?php the_field('artist_profile_picture')?>" />
      <?php endif; ?>
      <?php the_field('artist_description') ?>
      </p>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php include 'footer.php' ?>
