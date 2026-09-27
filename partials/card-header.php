<?php
/**
 * Cabecalho de card com icone, titulo e subtitulo.
 * Espera: $icone, $titulo, $subtitulo e, opcionalmente, $nivel ('h2' por padrao).
 */
$nivel = $nivel ?? 'h2';
?>
                <div class="card-titulo mb-3">
                  <div class="card-titulo-icone">
                    <i class="fa-solid <?= e($icone) ?> fa-2x text-warning"></i>
                  </div>

                  <div class="card-titulo-texto">
                    <<?= $nivel ?> class="mb-0 text-warning"><?= e($titulo) ?></<?= $nivel ?>>

                    <small class="text-secondary"><?= e($subtitulo) ?></small>
                  </div>
                </div>
