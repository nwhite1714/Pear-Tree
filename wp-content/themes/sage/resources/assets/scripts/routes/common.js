export default {
  init() {
    // JavaScript to be fired on all pages

    $('.dropdown').on('click', function(event) {
      $('#menu-services').slideToggle();
      event.preventDefault();
      $(this).toggleClass('inactive');
      $(this).toggleClass('active');
      // if ($('#menu-services').hasClass('has-children')) {
      //   $(this).removeClass('has-children');
      //   $(this).addClass('no-children');
      // } else {
      //   $(this).removeClass('no-children');
      //   $(this).addClass('has-children');
      // }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
