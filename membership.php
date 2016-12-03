<?php
/**
 * Template Name: Membership
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="membership">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="membership__nav">
    <a href="<?php echo home_url(); ?>/howtojoin">Benefits</a>
    <a class="howtojoin__nav--active" href="<?php echo home_url(); ?>/howtojoin/membership">Membership</a>
    <a href="<?php echo home_url(); ?>/howtojoin/application">Application</a>
  </div> <!-- howtojoin__nav -->

  <div class="membership__content">

    <h1 class="membership__header"><?php the_field('membership_header'); ?></h1>
    <p class="membership__body"><?php the_field('membership_header_body'); ?></p>
    <h2 class="membership__header--bottom"><?php the_field('time_requirements_header'); ?></h2>
    <p class="membership__body"><?php the_field('time_requirements_body'); ?></p>
    <h2 class="membership__header--bottom"><?php the_field('financial_header'); ?></h2>
    <p class="membership__body"><?php the_field('financial_body'); ?></p>
    <h2 class="membership__header--bottom"><?php the_field('commissions_header'); ?></h2>
    <p class="membership__body"><?php the_field('commissions_body'); ?></p>
    <h2 class="membership__header--bottom"><?php the_field('front_room_header'); ?></h2>
    <p class="membership__body"><?php the_field('front_room_body'); ?></p>
    <h2 class="membership__header--bottom"><?php the_field('back_room_header'); ?></h2>
    <p class="membership__body"><?php the_field('back_room_body'); ?></p>
    <h1 class="membership__header"><?php the_field('become_a_member_header'); ?></h1>
    <p class="membership__body"><?php the_field('become_a_member_body'); ?></p>
    <p class="membership__body">Fill out the <a href="<?php echo home_url(); ?>/howtojoin/application">Application</a></p>

  </div> <!-- howtojoin__content -->


<?php endwhile; ?>
<?php endif; ?>

</div> <!-- membership -->

<?php include 'footer.php' ?>
