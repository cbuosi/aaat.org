<?php
/**
 * Lista de documentos para download.
 * Espera: $documentos (array com arquivo, titulo, subtitulo, icone).
 */
?>
                <div class="documents-list">
                  <?php foreach ($documentos as $doc): ?>
                    <a href="<?= asset($doc['arquivo']) ?>" class="document-item" target="_blank" rel="noopener">
                      <div class="document-icon">
                        <i class="fa-solid <?= e($doc['icone']) ?>"></i>
                      </div>

                      <div class="document-content">
                        <strong><?= e($doc['titulo']) ?></strong>
                        <span><?= e($doc['subtitulo']) ?></span>
                      </div>

                      <div class="document-download">
                        <i class="fa-solid fa-download"></i>
                      </div>
                    </a>
                  <?php endforeach; ?>
                </div>
