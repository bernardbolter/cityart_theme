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


$('ul.artists-index__categories li a').append( "<span class='artists-index__square'></span>");

// Code for the member login modal
$('#member-login-click').click(function() {
  $('.member-login').addClass('member-login__show');
});

$('#member-login-close').click(function() {
  $('.member-login').removeClass('member-login__show');
})

$("#member-login-button").click(function(e) {
  e.preventDefault();
  var mempass = $.trim($('#member-input').val());
  if(!mempass) {
    $('.member-login__response').empty();
    $('.member-login__response').append('enter a password');
  } else if (mempass == 'member828') {
     $("#member-form").submit();
  } else {
    $('.member-login__response').empty();
    $('.member-login__response').append('password is incorrect');
  }
});

// $("#member-form").submit(function() {
//   var mempass = $.trim($('#member-input').val());
//
// });
