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
<?php $post_objects = get_field('page_link');

if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>Post Object Custom Field: <?php the_field('title'); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
</div>

<?php include 'footer.php' ?>
