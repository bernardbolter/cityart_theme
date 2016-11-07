<?php
/**
 * Template Name: Exhibitions
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists_wrap">
  <h1 class="artist_heading">Exhibitions</h1>

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
