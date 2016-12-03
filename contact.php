<?php
/**
 * Template Name: Contact
 * uses about page style sheet
 */
?>



<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="about">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="about__nav">
    <a href="<?php echo home_url(); ?>/aboutus">About</a>
    <a class="about__nav--active" href="<?php echo home_url(); ?>/aboutus/contact">Contact</a>
  </div> <!-- about_nav -->

  <div class="about__content">
    <div class="about__content--hero">
      <?php the_post_thumbnail(); ?>
    </div>
    <h2 class="about__header">Contact</h2>
    <p class="about__address">828 Valencia St. <span class="about__span">(between 19th and 20th)</span></p>
    <p class="about__address">San Francisco, CA 94110</p>
    <p class="about__phone">415-970-9900</p>
    <p class="about__general">For general inquiries</p>
    <p class="about__general">email us at <span class="about__email"><?php the_field('contact_email'); ?></span></p>
    <h2 class="about__header">Hours</h2>
    <p class="about__time">Sunday <span class="about__time--span">11 AM – 9 PM</span></p>
    <p class="about__time">Wednesday <span class="about__time--span">noon – 9 PM</span></p>
    <p class="about__time">Thursday <span class="about__time--span">noon – 9 PM</span></p>
    <p class="about__time">Friday <span class="about__time--span">noon – 10 PM</span></p>
    <p class="about__time">Saturday <span class="about__time--span">11 AM – 10 PM</span></p>
    <p class="about__closed">Closed Monday &amp; Tuesday</p>
  </div> <!-- about__content -->


<?php endwhile; ?>
<?php endif; ?>

</div> <!-- about -->

<?php include 'footer.php' ?>
