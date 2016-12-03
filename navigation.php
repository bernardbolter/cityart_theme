<nav class="navigation" id="navigation" role="navigation">
  <div class="navigation__container">

    <a href="<?php echo home_url(); ?>" class="navigation__logo" id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/cityart_logo.jpg" />
    </a>


    <div class="navigation__button" id="navigation-button">
      <span class="nav-button-top"></span>
      <span class="nav-button-middle"></span>
      <span class="nav-button-bottom"></span>
    </div>

    <ul class="navigation__links">
      <li><a class="<?php if(is_page( 35 ) || is_singular( 'exhibition')) echo 'navigation__links--active'; ?>" href="<?php echo home_url(); ?>/exhibitions">Exhibitions</a></li>
      <li><a class="<?php if(is_page( 58 ) || is_page( 113 ) || is_singular( 'artist' )) echo 'navigation__links--active'; ?>" href="<?php echo home_url(); ?>/artists">Artists</a></li>
      <li><a class="<?php if(is_page( 30 ) || is_page( 238 ) || is_page( 249 )) echo 'navigation__links--active'; ?>" href="<?php echo home_url(); ?>/howtojoin">How to Join</a></li>
      <li><a class="<?php if(is_page( 235 ) || is_page( 257 )) echo 'navigation__links--active'; ?>" href="<?php echo home_url(); ?>/aboutus">About Us</a></li>
      <li><a href="<?php echo home_url(); ?>/wp-admin">Member Login</a></li>
    </ul>

    <div class="navigation__mobile--background"></div>

    <div class="navigation__mobile" id="navigation-mobile">
      <ul class="navigation__mobile--links" id="links">
        <li><a class="<?php if(is_page( 35 ) || is_singular( 'exhibition')) echo 'navigation__mobile--links-active'; ?>" href="<?php echo home_url(); ?>/exhibitions">Exhibitions</a></li>
        <li><a class="<?php if(is_page( 58 ) || is_page(113) || is_singular( 'artist' )) echo 'navigation__mobile--links-active'; ?>" href="<?php echo home_url(); ?>/artists">Artists</a></li>
        <li><a class="<?php if(is_page( 30 ) || is_page(238) || is_page(249)) echo 'navigation__mobile--links-active'; ?>"href="<?php echo home_url(); ?>/howtojoin">How to Join</a></li>
        <li><a class="<?php if(is_page( 235 ) || is_page( 257 )) echo 'navigation__mobile--links-active'; ?>" href="<?php echo home_url(); ?>/aboutus">About Us</a></li>
        <li><a href="<?php echo home_url(); ?>/wp-admin">Member Login</a></li>
      </ul>
      <div class="navigation__mobile--line"></div>
      <div class="navigation__icons">
        <a href="https://www.facebook.com/cityartgallery.sf/"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" /></a>
        <a href="https://twitter.com/sfcityart"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_icon.png" /></a>
        <a href="https://www.instagram.com/explore/locations/1637514/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_icon.png" /></a>
      </div>
    </div> <!-- navigation__mobile -->

  </div> <!-- navigation-container -->
</nav>

<!-- THIS CLASS WRAPS THE CONTENT OF THE PAGES FOR THE MOVEMNET OF THE MOBILE NAVIAGTION - CLOSES IN FOOTER -->
<div class="site-wrapper" id="site-wrap">
