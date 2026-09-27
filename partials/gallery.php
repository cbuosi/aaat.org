<?php
/**
 * Galeria de fotos. Substitui os blocos de <img> escritos a mao.
 * Espera: $imagens (array de caminhos), $colunas (classes Bootstrap da coluna)
 * e $legenda (texto base do atributo alt).
 */
$colunas = $colunas ?? 'col-lg-6 col-md-6';
$legenda = $legenda ?? 'Foto do evento';
?>
                <div class="row g-3">
                  <?php foreach ($imagens as $i => $imagem): ?>
                    <div class="<?= e($colunas) ?>">
                      <div class="event-card">
                        <img
                          src="<?= asset($imagem) ?>"
                          class="img-fluid"
                          alt="<?= e($legenda) ?> <?= $i + 1 ?> de <?= count($imagens) ?>"
                          loading="lazy"
                          decoding="async"
                        />
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
