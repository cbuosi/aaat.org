<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-utensils';
                $titulo    = 'Jantar Beneficente 2026';
                $subtitulo = '10/09/2026 • em prol da Associação Antialcoólica de Taquaritinga';
                require __DIR__ . '/../partials/card-header.php';

                require __DIR__ . '/../partials/texto-44-anos.php';
                ?>

                <hr class="my-3" />

                <h4 class="text-warning">&#9829; Vídeo do jantar</h4>

                <video
                  class="w-100 rounded-4 mb-3"
                  controls
                  preload="none"
                  poster="<?= asset($GALERIA_JANTAR_2026[0]) ?>"
                >
                  <source src="<?= asset($VIDEO_JANTAR_2026) ?>" type="video/mp4" />
                  Seu navegador não reproduz vídeos.
                  <a href="<?= asset($VIDEO_JANTAR_2026) ?>">Baixe o arquivo</a>.
                </video>

                <h4 class="text-warning">&#9829; Fotos do jantar</h4>

                <?php
                $imagens = $GALERIA_JANTAR_2026;
                $colunas = 'col-lg-6 col-md-6';
                $legenda = 'Foto do Jantar Beneficente de 2026';
                require __DIR__ . '/../partials/gallery.php';
                ?>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
