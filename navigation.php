<nav class="navigation" id="navigation" role="navigation">
  <div class="navigation__button" id="navigation-button">
    <span class="nav-button-top"></span>
    <span class="nav-button-middle"></span>
    <span class="nav-button-bottom"></span>
  </div>
  <a href="<?php echo home_url(); ?>" class="navigation__logo" id="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cityart_logo.jpg" />
  </a>
  <div class="navigation__container" id="navigation-container">
    <ul class="navigation__container--links" id="links">
      <li><a href="<?php echo home_url(); ?>/exhibitions">Exhibitions</a></li>
      <li><a href="<?php echo home_url(); ?>/artists">Artists</a></li>
      <li><a href="<?php echo home_url(); ?>/howtojoin">How to Join</a></li>
      <li><a href="<?php echo home_url(); ?>/aboutus">About Us</a></li>
      <li><a href="<?php echo home_url(); ?>/memberlogin">Member Login</a></li>
    </ul>
  <div class="navigation__mobile">
    <div class="navigation__mobile--line"></div>
    <p class="navigation__mobile--form-title">Sign up for out email list</p>
    <div id="navigation__mobile--email-form" class="navigation__mobile--email-form">
        <input type="text" class="navigation__mobile--enter-email error" name="EMAIL" id="subscribe-email" placeholder="" spellcheck="false">
        <button type="submit" id="signup-button" class="navigation__mobile--signup-button">JOIN</button>
    </div>
  </div>
</nav>

<!-- THIS CLASS WRAPS THE CONTENT OF THE PAGES FOR THE MOVEMNET OF THE MOBILE NAVIAGTION - CLOSES IN FOOTER -->
<div class="site-wrapper" id="site-wrap">
