<?php
/**
 * Template Name: Home Page
 */
?>

<?php include 'head.php' ?>

<?php include 'header.php' ?>

<?php include 'navigation.php' ?>

<div class="home">
  <div class="home__image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/RobbShaller.jpg" />
  </div>
  <div class="home__wrap">
    <div class="home__info">
      <h1 class="home__image--artist">Featured art this month: "Kuka'ilimoku!" by Robb Shaller, Watercolor 2014</h1>
      <h1 class="home__info--title">NEW GROUP SHOW <span class="home__info--date">Nov 2-26</span></h1>
      <h2 class="home__info--reception">Opening Reception <span class="home__info--time">FRI . Nov 4 . 7-10pm</span></h2>
      <h3 class="home__info--contact">828 Valencia Street</h3>
      <h3 class="home__info--contact">San Francisco</h3>
      <h3 class="home__info--contact">415-970-9900</h3>
    </div>
    <div class="home__email">
      <h4 class="home__email--signup">Sign up for our e-mail list</h4>
      <input type="text" class="home__email--input" name="EMAIL_TWO" id="home-email-imput" placeholder="" spellcheck="false">
      <button type="submit" id="home-button-input" class="home__email--button">JOIN</button>
    </div>
  </div>
</div>


<?php include 'footer.php' ?>
