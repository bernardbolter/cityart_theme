</div> <!-- CLOSING OF site-wrapper CLASS AT THE BOTTOM ON NAVIGATION FILE -->
    <footer class="footer">
      <div class="footer__icons">
        <a href="https://www.facebook.com/cityartgallery.sf/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_icon.png" /></a>
        <a href="https://twitter.com/sfcityart"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" /></a>
        <a href="https://www.instagram.com/sfcityartgallery/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_icon.png" /></a>
      </div>
        <p class="footer__info">828 Valencia Street &#8226; San Francisco <span class="footer__hide">&#8226;</span> <span class="footer__break">415-970-9900</span></p>
        <p class="footer__links"><a id="member-login-click" href="#">member login </a> | <a href="/wp-admin"> administration login</a></p>

        <div class="member-login">
          <a id="member-login-close" href="#">x</a>
          <p>Enter password to access member information site</p>
          <form id="member-form" action="https://sites.google.com/view/cityart" methof="get">
            <input id="member-input" />
            <button type="submit" id="member-login-button">SUBMIT</button>
            <h5 class="member-login__response"></h5>
          </form>
        </div>

    </footer>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mashup.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
