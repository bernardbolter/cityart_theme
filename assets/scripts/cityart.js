$('#nav-toggle').click(function() {
   $(this).toggleClass('button-active');
   $('#links').toggleClass('links-open');
   $('#nav-container').toggleClass('container-open');
   $('#navigation').toggleClass('navigation-open');
   $('#logo').toggleClass('logo-open');
});
