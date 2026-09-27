<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-file-contract';
                $titulo    = 'Documentos da Associação';
                $subtitulo = 'Transparência, estatutos e documentos oficiais';
                require __DIR__ . '/../partials/card-header.php';
                ?>

                <p class="text-light opacity-75 mb-3">
                  Nesta seção você encontra documentos institucionais, estatutos,
                  demonstrativos e arquivos oficiais da Associação Antialcoólica de
                  Taquaritinga.
                </p>

                <?php
                $documentos = $DOCUMENTOS;
                require __DIR__ . '/../partials/documents.php';
                ?>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
