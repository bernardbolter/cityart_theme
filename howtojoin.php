<?php
/**
 * Template Name: How to Join
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="howtojoin">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="howtojoin__nav">
    <a href="<?php echo home_url(); ?>/howtojoin">Benefits</a>
    <a href="<?php echo home_url(); ?>/howtojoin/membership">Membership</a>
    <a href="<?php echo home_url(); ?>/howtojoin/application">Application</a>
  </div> <!-- howtojoin__nav -->
  <div class="howtojoin__content">
    <div class="howtojoin__content--hero">
      <?php the_post_thumbnail(); ?>
    </div>
    <h1 class="howtojoin__content--header-top"><?php the_field('why_artists_join_header'); ?></h1>
    <p class="howtojoin__content--body"><?php the_field('why_artists_join_body'); ?></p>
    <h2 class="howtojoin__content--header-top"><?php the_field('what_we_offer_header'); ?></h2>
    <div class="howtojoin__content--row">
      <?php $higher_commissions_icon = get_field('higher_commissions_icon'); ?>
      <img src="<?php echo $higher_commissions_icon['sizes']['thumbnail']?>" />
      <div class="howtojoin__content--column">
        <h3 class="howtojoin__content--header-bot"><?php the_field('why_artists_join_header'); ?></h3>
        <p class="howtojoin__content--body"><?php the_field('why_artists_join_body'); ?></p>
      </div>
    </div> <!-- howtojoin__content-row -->

    <div class="howtojoin__content--row">
      <?php $large_client_base_icon = get_field('large_client_base_icon'); ?>
      <img src="<?php echo $large_client_base_icon['sizes']['thumbnail']?>" />
      <div class="howtojoin__content--column">
        <h3 class="howtojoin__content--header-bot"><?php the_field('why_artists_join_header'); ?></h3>
        <p class="howtojoin__content--body"><?php the_field('why_artists_join_body'); ?></p>
      </div>
    </div> <!-- howtojoin__content-row -->

    <div class="howtojoin__content--row">
      <?php $public_relations_icon = get_field('public_relations_icon'); ?>
      <img src="<?php echo $public_relations_icon['sizes']['thumbnail']?>" />
      <div class="howtojoin__content--column">
        <h3 class="howtojoin__content--header-bot"><?php the_field('public_relations_header'); ?></h3>
        <p class="howtojoin__content--body"><?php the_field('public_relations_body'); ?></p>
      </div>
    </div> <!-- howtojoin__content-row -->

    <div class="howtojoin__content--row">
      <?php $gallery_experience_icon = get_field('gallery_experience_icon'); ?>
      <img src="<?php echo $gallery_experience_icon['sizes']['thumbnail']?>" />
      <div class="howtojoin__content--column">
        <h3 class="howtojoin__content--header-bot"><?php the_field('gallery_experience_header'); ?></h3>
        <p class="howtojoin__content--body"><?php the_field('gallery_experience_body'); ?></p>
      </div>
    </div> <!-- howtojoin__content-row -->

  </div> <!-- howtojoin__content -->


<?php endwhile; ?>
<?php endif; ?>

</div> <!-- howtojoin -->

<?php include 'footer.php' ?>
