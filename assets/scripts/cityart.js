$('#navigation-button').click(function() {
   $(this).toggleClass('navigation__button--active');
   $('#links').toggleClass('navigation__container--open');
   $('#navigation-container').toggleClass('navigation__container--open');
   $('#navigation').toggleClass('navigation__open');
   $('#logo').toggleClass('navigation__logo--open');
   $('#site-wrap').toggleClass('site-wrapper-open');
});
