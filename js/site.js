$(document).ready(function () {
  const $navbar = $('.navbar');

  $(window).on('scroll', function () {
    $navbar.toggleClass('scrolled', $(this).scrollTop() > 50);
  });

  $('.navbar-nav .nav-link').on('click', function () {
    $('.navbar-collapse').collapse('hide');
  });

  $('a[href^="#"]').on('click', function (e) {
    const target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: target.offset().top - 80 }, 600);
    }
  });
});
