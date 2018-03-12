$(document).ready(function($) {
  var $window = $(window);

  $('selection[data-type="background"]').each(function(index, el) {
    var $bgObj = $(this); // assign the object
    $(window).scroll(function() {
      //scroll background var speed , yPOS negative because scroll up
      var yPos = -($window.scrollTop())
      $bgObj.data('speed');
      //final background posisiton
      var coords = '50%' + yPos + 'px';

      //move the background
      $bgObj.css({
        backgroundPosition: coords
      });
    });
  });
});
