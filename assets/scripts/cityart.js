// Code for the mobile navigation

$('#navigation-button').click(function() {
   $(this).toggleClass('navigation__button--active');
   $('#links').toggleClass('navigation__mobile--open');
   $('#navigation-mobile').toggleClass('navigation__mobile--open');
   $('#navigation').toggleClass('navigation__open');
   $('#logo').toggleClass('navigation__logo--open');
   $('#site-wrap').toggleClass('site-wrapper-open');
});

// Code for when the upcoming notification is at the top of the Page

if(document.getElementById('upcoming-close')) {
  $('#site-wrap').addClass('site-wrap-upcoming');
  $('#navigation').addClass('navigation-upcoming');
};

// Code to close upcoming notification bar when present

$('#upcoming-close').click(function(){
  $('#upcoming').remove();
  $('#site-wrap').removeClass('site-wrap-upcoming');
  $('#navigation').removeClass('navigation-upcoming');
});

// Code to open and close past shows link in Exhibitions

$('#past-shows').click(function() {
  $('.exhibition__nav--pastshows').toggleClass('exhibition__nav--pastshows-open');
});

// Code to open and close filters in artist index mobile

$('#artists-sorting-header').click(function() {
  $('.artists-index__artwork').toggleClass('artists-index__artwork--open');
  $('.artists-index__artists--header').toggleClass('artists-index__artists--header-rotate');
});

// Code for indicidual artist page gallery

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

$('#artwork_4').click(function() {
  $("#artwork_hero_image").fadeOut(function() {
    $("#artwork_hero_image").attr( 'src', artist_image_data[0][9] ).fadeIn();
    $("#artwork_hero_title").text( artist_image_data[0][10] ).fadeIn();
    $("#artwork_hero_info").text( artist_image_data[0][11] ).fadeIn();
  });
});

$('#artwork_5').click(function() {
  $("#artwork_hero_image").fadeOut(function() {
    $("#artwork_hero_image").attr( 'src', artist_image_data[0][12] ).fadeIn();
    $("#artwork_hero_title").text( artist_image_data[0][13] ).fadeIn();
    $("#artwork_hero_info").text( artist_image_data[0][14] ).fadeIn();
  });
});

$('ul.artists-index__categories li a').append( "<span class='artists-index__square'></span>");
