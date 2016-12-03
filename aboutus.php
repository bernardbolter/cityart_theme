<?php
/**
 * Template Name: About Us
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="about">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="about__nav">
    <a class="about__nav--active" href="<?php echo home_url(); ?>/aboutus">About</a>
    <a  href="<?php echo home_url(); ?>/aboutus/contact">Contact</a>
  </div> <!-- about_nav -->

  <div class="about__content">
    <div class="about__content--hero">
      <?php the_post_thumbnail(); ?>
    </div>
    <h1 class="about__header"><?php the_field('about_header'); ?></h1>
    <h2 class="about__body"><?php the_field('about_body'); ?></h2>
    <h1 class="about__joinus">Join us the First Friday of every month for our <span class="about__break">opening reception 7 PM–10 PM!</span></h1>
    <p class="about__address">828 Valencia St. <span class="about__span">(between 19th and 20th)</span></p>
    <p class="about__address">San Francisco, CA 94110</p>
    <p class="about__phone">415-970-9900</p>
  </div> <!-- about__content -->


<?php endwhile; ?>
<?php endif; ?>

</div> <!-- about -->

<?php include 'footer.php' ?>
