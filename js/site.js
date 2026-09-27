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

  /* ------------------------------------------------------ */
  /* TEMA CLARO / ESCURO                                     */
  /* ------------------------------------------------------ */

  // O tema ja foi aplicado pelo script inline no <head>; aqui so
  // acertamos o icone e tratamos o clique.
  const $raiz = $('html');
  const $botao = $('#tema-btn');

  // Sol = clique para clarear (estamos no escuro); lua = o contrario.
  function mostrarIcone() {
    const escuro = $raiz.attr('data-theme') !== 'light';
    $botao
      .find('i')
      .attr('class', escuro ? 'fa-solid fa-sun' : 'fa-solid fa-moon');
    $botao.attr(
      'title',
      escuro ? 'Mudar para o modo claro' : 'Mudar para o modo escuro'
    );
  }

  mostrarIcone();

  $botao.on('click', function () {
    const novo = $raiz.attr('data-theme') === 'light' ? 'dark' : 'light';
    $raiz.attr('data-theme', novo);
    mostrarIcone();

    try {
      localStorage.setItem('tema', novo);
    } catch (e) {
      // Navegacao privativa ou armazenamento bloqueado: o tema
      // continua valendo nesta pagina, so nao fica guardado.
    }
  });
});
