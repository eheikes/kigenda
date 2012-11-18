$(function() {
  // Date picker
  $('#datepicker').datepicker({
    showOn: 'button',
    buttonText: 'Sun 11/18'
  });

  // Category expand/collapse
  $('.events h4 a').click(function(event) {
    var parent = $(this).parents('.cat');
    if (parent.hasClass('expanded')) {
      parent.find('.item-box').slice(1).addClass('hidden');
      parent.find('.item-box .info').hide();
      parent.removeClass('expanded');
    } else {
      parent.find('.item-box').removeClass('hidden');
      parent.addClass('expanded');
    }
    event.preventDefault();
  });

  // Event full open
  $('.events h5 a.title').click(function(event) {
    var box = $(this).parents('.item-box').find('.info');
    if (box.is(':visible')) {
      box.hide();
    } else {
      box.show();
    }
    event.preventDefault();
  });

  // Sync to cal
  $('a.sync').click(function(event) {
    if ($.cookie('login')) {
      var alert = $('<div class="alert">Synced!</div>');
      alert.appendTo($(this));
      setTimeout(function() {
        alert.fadeOut('slow', function() {
          alert.remove();
        });
      }, 1000);
    } else {
      $('#login').modal({ backdrop: 'static', show: true });
    }
    event.preventDefault();
  });

  var ToggleLoginLinks = function(isLoggedIn) {
    if (isLoggedIn) {
      if ($('.utility .nav .welcome').length == 0) {
        $('<li class="welcome">Hello, ' + $.cookie('login') + '</li>').prependTo($('.utility .nav'));
      }
      $('.utility .login').hide();
      $('.utility .signup').hide();
      $('.utility .logout').show();
    } else {
      $('.utility .welcome').remove();
      $('.utility .login').show();
      $('.utility .signup').show();
      $('.utility .logout').hide();
    }
  };
  if ($.cookie('login')) {
    ToggleLoginLinks(true);
  } else {
    ToggleLoginLinks(false);
  }

  // Login link
  $('.utility .login').click(function(event) {
    $('#login').modal({ backdrop: 'static', show: true });
    event.preventDefault();
  });

  // Logout link
  $('.utility .logout').click(function(event) {
    ToggleLoginLinks(false);
    $.removeCookie('login');
    event.preventDefault();
  });

  // Signup link
  $('.utility .signup').click(function(event) {
    $('#signup').modal({ backdrop: 'static', show: true });
    event.preventDefault();
  });

  // Login form
  $('#login form').submit(function(event) {
    $.cookie('login', $('#inputUsername').val());
    ToggleLoginLinks(true);
    $('#login').modal('hide');
    $('#login form input').val('');
    event.preventDefault();
  });
  $('#login .btn-primary').click(function(event) {
    $('#login form').submit();
    event.preventDefault();
  });

  // Signup form
  $('#signup form').submit(function(event) {
    $('#signup').modal('hide');
    $('#signup form input').val('');
    event.preventDefault();
  });
  $('#signup .btn-primary').click(function(event) {
    $('#signup form').submit();
    event.preventDefault();
  });

});
