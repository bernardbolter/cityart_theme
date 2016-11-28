<?php
/**
 * Template Name: How to Join
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists_wrap">
  <h1 class="artist_heading">How to Show Here</h1>

  <?php
  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();
  		//
  		the_content();
  		//
  	} // end while
  } // end if
  ?>

</div>

<?php include 'footer.php' ?>
