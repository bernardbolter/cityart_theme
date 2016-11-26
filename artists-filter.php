<?php
/**
 * Template Name: Artists Filter
 */
?>

<?php
    if($_GET['medium'] && !empty($_GET['medium']))

      {
          $medium = $_GET['medium'];
          $medium_args = array();
          foreach($_GET['medium'] as $medium){
             $medium_args[] = $medium;
           }
      }

      $args = array(
        'post_type'     => 'artist',
        'post_per_page' => -1,
        'cat' => $medium_args
      );

 ?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists-index">

  <?php include 'artists-navigation.php' ?>

   <div id="artwork-loop" class="artists-index__wrapper">
     <?php print_r(array_values($medium_args)); ?>
    <?php
    $art_filter = new WP_Query($args);
      while($art_filter -> have_posts()) : $art_filter -> the_post();
     ?>
     <h1><?php the_title(); ?> </h1>

   <?php endwhile; wp_reset_query(); ?>

  </div>
</div>

<?php include 'footer.php' ?>
