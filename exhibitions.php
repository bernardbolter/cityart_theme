<?php
/**
 * Template Name: Exhibitions
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="exhibitions">
  <div class="exhibitions__list">
    <p class="exhibitions__list--current">Current Show</p>
    <p class="exhibitions__list--past">Past Shows</p>
  </div>
  <div class="exhibitions__images">
    <img src="<?php echo get_template_directory_uri(); ?>/img/2016-10-front.jpg" />
  </div>
  <div class="exhibitions__images">
    <img src="<?php echo get_template_directory_uri(); ?>/img/2016-10-back.jpg" />
  </div>
</div>

<?php include 'footer.php' ?>
