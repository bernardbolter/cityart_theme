<?php
/**
 * Template Name: Artists Filter
 */
?>

<?php

    if($_GET['search_text'] && !empty($_GET['search_text']))

      {
          $text = $_GET['search_text'];
      }

    if($_GET['medium'] && !empty($_GET['medium']))

      {
          $medium = $_GET['medium'];
          $medium_args = array();
          foreach($_GET['medium'] as $medium){
             $medium_args[] = $medium;
           }
      }

    if ($_GET['sort'] && !empty($_GET['sort']))

      {
        $sort = $_GET['sort'];
        $orderby = '';
        $order = '';
        if ($sort == 'date') {
            $orderby = $sort;
            $order = "";
          }
        if ($sort == 'ASC') {
            $orderby = "title";
            $order = $sort;
          }
        if ($sort == 'DESC') {
            $orderby = "title";
            $order = $sort;
          }
        if ($sort == 'rand') {
            $orderby = "rand";
            $order = "";
          }
      }

      $args = array(
        'post_type'  => 'artist',
        'posts_per_page' => -1,
        'cat' => $medium_args,
        'orderby' => $orderby,
        'order' =>$order,
        's' => $text
      );

 ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="artists-index">
  <?php include 'artists-navigation.php' ?>

   <div id="artwork-loop" class="artists-index__wrapper">
    <?php
      if ($sort == 'ASC') {
        add_filter( 'posts_orderby' , 'posts_orderby_lastname' );
      }
      if ($sort == 'DESC') {
        add_filter( 'posts_orderby' , 'posts_orderby_lastname_desc');
      }
    $art_filter = new WP_Query($args);
    if (!empty($text) && !($art_filter->have_posts())) {
      echo '<h2 class="artists-index__nosearch">No Match for Search: ' . $text . '</h2>';
    }
      while($art_filter -> have_posts()) : $art_filter -> the_post();
     ?>
     <a class="artists-index__artlist" href="<?php the_permalink(); ?>">
       <?php $artist_image = get_field('artist_image_1'); ?>
       <img src="<?php echo $artist_image['sizes']['thumbnail']?>" />
       <h2 class="artists-index__artlist--name"><?php the_title(); ?></h2>
     </a>

   <?php
         if ($sort == 'ASC') {
           remove_filter( 'posts_orderby' , 'posts_orderby_lastname' );
         }
         if ($sort == 'DESC') {
           remove_filter( 'posts_orderby' , 'posts_orderby_lastname_desc');
         }
        endwhile; wp_reset_query();
    ?>

  </div>
</div>

<?php include 'footer.php' ?>
