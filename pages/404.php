<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-triangle-exclamation';
                $titulo    = 'Página não encontrada';
                $subtitulo = 'O endereço acessado não existe ou foi alterado';
                require __DIR__ . '/../partials/card-header.php';
                ?>

                <p>
                  Verifique o endereço digitado ou utilize o menu acima para
                  navegar pelo site.
                </p>

                <p class="mb-0">
                  <a href="<?= url() ?>" class="social-btn">
                    <i class="fa-solid fa-house"></i>
                    Voltar para a página inicial
                  </a>
                </p>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
