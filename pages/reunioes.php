<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <div class="card custom-card border-0 shadow-lg rounded-4 p-3 p-lg-4 mt-3">
                <?php
                $icone     = 'fa-users';
                $titulo    = 'Reuniões';
                $subtitulo = 'Um espaço de acolhimento, escuta e apoio';
                require __DIR__ . '/../partials/card-header.php';
                ?>

                <div class="row g-3 align-items-center">
                  <!-- TEXTO -->
                  <div class="col-lg-7">
                    <div class="meeting-box">
                      <h4>&#9829; Reuniões Semanais</h4>

                      <p>
                        Nossos encontros acontecem todos os sábados, das 20h00min
                        às 22h00min.
                      </p>

                      <p>
                        Durante as reuniões, realizamos conversas em grupo, troca
                        de experiências e apoio mútuo entre os participantes.
                      </p>

                      <p>
                        Cada pessoa tem a oportunidade de compartilhar sua
                        história, suas dificuldades e conquistas em um ambiente
                        acolhedor, respeitoso e sem julgamentos.
                      </p>

                      <p>
                        A participação é gratuita e aberta para todas as pessoas
                        que desejam ajuda, orientação ou apoio para enfrentar
                        problemas relacionados ao alcoolismo e outras drogas.
                      </p>

                      <p>
                        Venha conhecer o nosso trabalho de perto. Aqui a ajuda é
                        sempre bem-vinda.
                      </p>

                      <div class="meeting-info mt-3">
                        <div class="info-item">
                          <i class="fa-solid fa-clock"></i>
                          <div>
                            <strong>Horário</strong>
                            <span>Sábados &bull; 20h00 às 22h00</span>
                          </div>
                        </div>

                        <div class="info-item">
                          <i class="fa-solid fa-location-dot"></i>
                          <div>
                            <strong>Endereço</strong>
                            <span>
                              <?= e($SITE['endereco']['rua']) ?><br />
                              <?= e($SITE['endereco']['bairro']) ?> - <?= e($SITE['endereco']['cidade']) ?>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- FOTO -->
                  <div class="col-lg-5">
                    <div class="event-card">
                      <img
                        src="<?= asset('img/ev6.jpg') ?>"
                        class="img-fluid"
                        alt="Participantes reunidos durante um encontro semanal"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                </div>
              </div>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
