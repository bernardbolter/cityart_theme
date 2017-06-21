<?php
/**
 * Template Name: single-artist
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

  $image_4 = get_field('artist_image_4');
  $image_4_url = $image_4['url'];
  $image_4_size = 'thumbnail';
  $thumb_4 = $image_4['sizes'][ $image_4_size ];

  $image_5 = get_field('artist_image_5');
  $image_5_url = $image_5['url'];
  $image_5_size = 'thumbnail';
  $thumb_5 = $image_5['sizes'][ $image_5_size ];

  $image_6 = get_field('artist_image_6');
  $image_6_url = $image_6['url'];
  $image_6_size = 'thumbnail';
  $thumb_6 = $image_6['sizes'][ $image_6_size ];

  $image_7 = get_field('artist_image_7');
  $image_7_url = $image_7['url'];
  $image_7_size = 'thumbnail';
  $thumb_7 = $image_7['sizes'][ $image_7_size ];

  $image_8 = get_field('artist_image_8');
  $image_8_url = $image_8['url'];
  $image_8_size = 'thumbnail';
  $thumb_8 = $image_8['sizes'][ $image_8_size ];

  $image_9 = get_field('artist_image_9');
  $image_9_url = $image_9['url'];
  $image_9_size = 'thumbnail';
  $thumb_9 = $image_9['sizes'][ $image_9_size ];


  ?>

  <div class="artist" id="post-<?php the_ID(); ?>">

  	<div class="artist__header">
  		<h1 class="artist__header--title"><?php the_title(); ?></h1>

      <?php if( get_field('artist_email') ): ?>
        <h3 class="artist__header--email"><?php the_field('artist_email'); ?></h3>
      <?php endif; ?>

      <?php if( get_field('artist_website') ): ?>
        <h3 class="artist__header--website"><a href="http://<?php the_field('artist_website'); ?>"><?php the_field('artist_website'); ?></a></h3>
      <?php endif; ?>

  	</div>

    <div class="artist__images">
      <div class="artist__main-image" id="artwork_hero">
        <img id="artwork_hero_image" src="<?php echo $image_1_url; ?>" />
        <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_1_title'); ?></h2>
        <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_1_info'); ?></p>
      </div>
      <?php if(!empty($image_2)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_2_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_2_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_2_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_3)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_3_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_3_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_3_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_4)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_4_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_4_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_4_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_5)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_5_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_5_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_5_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_6)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_6_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_6_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_6_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_7)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_7_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_7_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_7_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_8)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_8_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_8_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_8_info'); ?></p>
        </div>
      <?php } ?>
      <?php if(!empty($image_9)) { ?>
        <div class="artist__main-image" id="artwork_hero">
          <img id="artwork_hero_image" src="<?php echo $image_8_url; ?>" />
          <h2 id="artwork_hero_title" class="artist__main-image--title"><?php the_field('artist_image_8_title'); ?></h2>
          <p id="artwork_hero_info" class="artist__main-image--info"><?php the_field('artist_image_8_info'); ?></p>
        </div>
      <?php } ?>
      </div>
    </div>

    <div class="artist__bio">
      <h2 class="artist__bio--title">Biography</h2>
      <p class="artist__bio--body">
      <?php if( !empty(get_field('artist_profile_picture') ) ): ?>
        <?php $profile_picture = get_field('artist_profile_picture'); ?>
        <img src="<?php echo $profile_picture['sizes']['thumbnail']; ?>" />
      <?php endif; ?>
      <?php the_field('artist_description') ?>
      </p>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php include 'footer.php' ?>
