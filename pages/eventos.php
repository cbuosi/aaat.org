<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-calendar-days';
                $titulo    = 'Eventos';
                $subtitulo = 'Registros das atividades e encontros da associação';
                require __DIR__ . '/../partials/card-header.php';

                $imagens = $GALERIA_EVENTOS;
                $colunas = 'col-lg-6 col-md-6';
                $legenda = 'Foto de evento da associação';
                require __DIR__ . '/../partials/gallery.php';
                ?>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
