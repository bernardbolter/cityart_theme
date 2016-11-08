<nav class="navigation" id="navigation" role="navigation">
  <div class="navigation__button" id="navigation-button">
    <span class="nav-button-top"></span>
    <span class="nav-button-middle"></span>
    <span class="nav-button-bottom"></span>
  </div>
  <a href="#" class="navigation__logo" id="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cityart_logo.png" />
  </a>
  <div class="navigation__container" id="navigation-container">
    <ul class="navigation__container--links" id="links">
      <li><a href=<?php get_template_directory_uri() ?>"/exhibitions">Exhibitions</a></li>
      <li><a href=<?php get_template_directory_uri() ?>"/artists">Artists</a></li>
      <li><a href=<?php get_template_directory_uri() ?>"/showhere">Show Here</a></li>
      <li><a href=<?php get_template_directory_uri() ?>"/aboutus">About Us</a></li>
      <li><a href=<?php get_template_directory_uri() ?>"/memberlogin">Member Login</a></li>
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
