<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-address-book';
                $titulo    = '♥ Contato';
                $subtitulo = 'Entre em contato conosco';
                $nivel     = 'h4';
                require __DIR__ . '/../partials/card-header.php';
                ?>

                <div class="row g-3">
                  <div class="col-12">
                    <div class="contact-item">
                      <i class="fa-solid fa-location-dot"></i>

                      <div>
                        <strong>Endereço</strong>
                        <p class="mb-0">
                          <?= e($SITE['endereco']['rua']) ?><br />
                          <?= e($SITE['endereco']['bairro']) ?><br />
                          <?= e($SITE['endereco']['cidade']) ?><br />
                          CEP: <?= e($SITE['endereco']['cep']) ?>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="contact-item">
                      <i class="fa-solid fa-phone"></i>

                      <div>
                        <strong>Telefone</strong>
                        <p class="mb-0">
                          <?php foreach ($SITE['telefones'] as $tel): ?>
                            <?= e($tel) ?><br />
                          <?php endforeach; ?>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="contact-item">
                      <i class="fa-solid fa-envelope"></i>

                      <div>
                        <strong>E-mail</strong>
                        <p class="mb-0">
                          <a
                            href="mailto:<?= e($SITE['email']) ?>"
                            class="text-decoration-none text-light"
                          ><?= e($SITE['email']) ?></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
