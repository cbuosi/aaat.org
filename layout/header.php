<?php
/** Cabecalho e navbar - antes repetido nas 6 paginas HTML. */
$tituloPagina = $PAGINA['title'] === $SITE['nome']
    ? $SITE['nome']
    : $PAGINA['title'] . ' | ' . $SITE['nome'];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="<?= asset('favico/favicon-96x96.png') ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= asset('favico/favicon.svg') ?>" />
    <link rel="shortcut icon" href="<?= asset('favico/favicon.ico') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('favico/apple-touch-icon.png') ?>" />
    <link rel="manifest" href="<?= asset('favico/site.webmanifest') ?>" />

    <title><?= e($tituloPagina) ?></title>
    <meta name="description" content="<?= e($PAGINA['desc'] ?? '') ?>" />
    <meta name="keywords" content="associação antialcoólica, taquaritinga, alcoolismo, apoio, drogas" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="<?= asset('js/site.js') ?>" defer></script>
  </head>
  <body>

    <!-- ====================================================== -->
    <!-- NAVBAR -->
    <!-- ====================================================== -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= url() ?>">
          <img src="<?= asset('img/logo-aaat2.png') ?>" alt="<?= e($SITE['nome']) ?>" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#menu"
          aria-controls="menu"
          aria-expanded="false"
          aria-label="Abrir menu de navegação"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <?php /* 'label' e o texto curto do menu; 'title' vai no <title> */ ?>
            <?php foreach ($ROUTES as $slug => $item): ?>
              <?php if (($item['menu'] ?? true) === false) continue; ?>
              <li class="nav-item">
                <a
                  class="nav-link<?= $slug === $rota ? ' active' : '' ?>"
                  href="<?= url($slug) ?>"
                  <?= $slug === $rota ? 'aria-current="page"' : '' ?>
                >
                  <i class="fa-solid <?= e($item['icon']) ?>"></i>
                  <span class="nav-label">
                    <span><?= e($item['label'] ?? $item['title']) ?></span>
                    <?php if (!empty($item['label2'])): ?>
                      <span class="nav-label-2"><?= e($item['label2']) ?></span>
                    <?php endif; ?>
                  </span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>
