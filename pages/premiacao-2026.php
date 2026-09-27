<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-trophy';
                $titulo    = 'Premiação 2026';
                $subtitulo = '26/09/2026 • premiação e comemoração dos 44 anos da AAAT';
                require __DIR__ . '/../partials/card-header.php';

                require __DIR__ . '/../partials/texto-44-anos.php';
                ?>

                <hr class="my-3" />

                <h4 class="text-warning">&#9829; Fotos da premiação</h4>

                <?php
                $imagens = $GALERIA_PREMIACAO_2026;
                $colunas = 'col-lg-6 col-md-6';
                $legenda = 'Foto da premiação e comemoração dos 44 anos da AAAT';
                require __DIR__ . '/../partials/gallery.php';
                ?>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
