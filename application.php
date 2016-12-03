<?php
/**
 * Template Name: Application
 */
?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="application">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="application__nav">
    <a href="<?php echo home_url(); ?>/howtojoin">Benefits</a>
    <a href="<?php echo home_url(); ?>/howtojoin/membership">Membership</a>
    <a class="howtojoin__nav--active" href="<?php echo home_url(); ?>/howtojoin/application">Application</a>
  </div> <!-- howtojoin__nav -->

  <div class="application__content">

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScrmnPYzsVLDovfXCdEaZ3xpnvnEs8AA8wNfhreJ5vvsWVepQ/viewform?embedded=true#start=embed"  frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

  </div> <!-- howtojoin__content -->


<?php endwhile; ?>
<?php endif; ?>

</div> <!-- membership -->

<?php include 'footer.php' ?>
