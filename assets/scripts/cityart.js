$('#navigation-button').click(function() {
   $(this).toggleClass('navigation__button--active');
   $('#links').toggleClass('navigation__container--open');
   $('#navigation-container').toggleClass('navigation__container--open');
   $('#navigation').toggleClass('navigation__open');
   $('#logo').toggleClass('navigation__logo--open');
   $('#site-wrap').toggleClass('site-wrapper-open');
});


$('#artwork_1').click(function() {
  $("#artwork_hero_image").fadeOut(function() {
    $("#artwork_hero_image").attr( 'src', artist_image_data[0][0] ).fadeIn();
    $("#artwork_hero_title").text( artist_image_data[0][1] ).fadeIn();
    $("#artwork_hero_info").text( artist_image_data[0][2] ).fadeIn();
  });
});

$('#artwork_2').click(function() {
  $("#artwork_hero_image").fadeOut(function() {
    $("#artwork_hero_image").attr( 'src', artist_image_data[0][3] ).fadeIn();
    $("#artwork_hero_title").text( artist_image_data[0][4] ).fadeIn();
    $("#artwork_hero_info").text( artist_image_data[0][5] ).fadeIn();
  });
});

$('#artwork_3').click(function() {
  $("#artwork_hero_image").fadeOut(function() {
    $("#artwork_hero_image").attr( 'src', artist_image_data[0][6] ).fadeIn();
    $("#artwork_hero_title").text( artist_image_data[0][7] ).fadeIn();
    $("#artwork_hero_info").text( artist_image_data[0][8] ).fadeIn();
  });
});
