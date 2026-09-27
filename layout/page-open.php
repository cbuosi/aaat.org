<?php
/**
 * Abre a estrutura das paginas internas: um card unico ocupando a largura
 * toda, com o cabecalho (logotipo + titulo a esquerda, foto institucional
 * a direita). Fechada por layout/page-close.php.
 */
?>
    <section class="py-4">
      <div class="container">
        <div class="card custom-card p-3 p-lg-4">

          <div class="page-hero">
            <div class="page-hero-text">
              <img
                src="<?= asset('img/logo-aaat2.png') ?>"
                class="hero-logo"
                alt="Logotipo da Associação Antialcoólica de Taquaritinga"
              />

              <h1>
                Associação <span>Antialcoólica</span><br />
                de Taquaritinga
              </h1>
            </div>

            <div class="page-hero-photo">
              <img
                src="<?= asset('img/quem-somos4.png') ?>"
                class="img-fluid"
                alt="Participantes das reuniões da associação"
                loading="lazy"
                decoding="async"
              />
            </div>
          </div>
