$(function() {
  $('#datepicker').datepicker({
    showOn: 'button',
    buttonText: 'November 2012'
  });

  // Category filtering
  $('.filter a').click(function(event) {
    var icon = $(this).find('span');
    var type = $(this).attr('class');
    if (icon.hasClass('icon-ok')) {
      icon.addClass('icon-blank');
      icon.removeClass('icon-ok');
      $('.events .' + type).hide();
    } else {
      icon.addClass('icon-ok');
      icon.removeClass('icon-blank');
      $('.events .' + type).show();
    }
    event.preventDefault();
  });

  // var EqualHeights = function() {
  //   var biggest = 0;
  //   $('.main .span3').css('height', '');
  //   $('.main .span3').each(function() {
  //     biggest = Math.max($(this).innerHeight(), biggest);
  //   });
  //   $('.main .span3').css('height', biggest);
  // }
  // EqualHeights();

  // Category expand/collapse
  $('.events h4 a').click(function(event) {
    var parent = $(this).parents('.cat');
    if ($(this).hasClass('expanded')) {
      parent.find('.item-box').slice(1).addClass('hidden');
      $(this).removeClass('expanded');
    } else {
      parent.find('.item-box').removeClass('hidden');
      $(this).addClass('expanded');
    }
    event.preventDefault();
  });

  // Sync to cal
  $('a.sync').click(function(event) {
    // if loggedin
    // else simulate click
    event.preventDefault();
  });
});
