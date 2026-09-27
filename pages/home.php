<?php /** Home: evento em destaque antes do bloco institucional de duas colunas. */ ?>

    <!-- ====================================================== -->
    <!-- DESTAQUES: 44 ANOS -->
    <!-- ====================================================== -->

    <section class="py-4">
      <div class="container">
        <div class="card custom-card p-3 p-lg-4">

          <?php
          $icone     = 'fa-cake-candles';
          $titulo    = '44 anos da Associação';
          $subtitulo = 'Setembro de 2026';
          require __DIR__ . '/../partials/card-header.php';
          ?>

          <p>
            Em setembro de 2026 a Associação Antialcoólica de Taquaritinga
            completou 44 anos de fundação. Para marcar a data, realizamos um
            jantar beneficente e uma noite de premiação na sede social, na Vila
            Rosa, reunindo recuperandos, familiares, voluntários e amigos da
            entidade. Veja abaixo as fotos e os registros de cada celebração.
          </p>

          <div class="row g-3 mt-1">

            <?php
            $destaques = [
                [
                    'rota'  => 'jantar-2026',
                    'foto'  => 'img/jantar-2026/jantar-2026-04.jpeg',
                    'nome'  => 'Jantar Beneficente 2026',
                    'data'  => '10 de setembro de 2026',
                    'texto' => 'Jantar beneficente em prol da associação, com vídeo e fotos da noite.',
                    'icone' => 'fa-utensils',
                ],
                [
                    'rota'  => 'premiacao-2026',
                    'foto'  => $GALERIA_PREMIACAO_2026[0],
                    'nome'  => 'Premiação 2026',
                    'data'  => '26 de setembro de 2026',
                    'texto' => 'Premiação e comemoração dos 44 anos, com 36 fotos da celebração.',
                    'icone' => 'fa-trophy',
                ],
            ];
            ?>

            <?php foreach ($destaques as $d): ?>
              <div class="col-lg-6">
                <a href="<?= url($d['rota']) ?>" class="destaque-card event-card d-block h-100">
                  <img
                    src="<?= asset($d['foto']) ?>"
                    class="img-fluid w-100"
                    alt="<?= e($d['nome']) ?>"
                    loading="lazy"
                    decoding="async"
                  />

                  <div class="destaque-corpo">
                    <h4>
                      <i class="fa-solid <?= e($d['icone']) ?>"></i>
                      <?= e($d['nome']) ?>
                    </h4>

                    <small class="text-secondary d-block mb-2"><?= e($d['data']) ?></small>

                    <p><?= e($d['texto']) ?></p>

                    <span class="social-btn">
                      <i class="fa-solid fa-images"></i>
                      Ver as fotos
                    </span>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </section>

    <!-- ====================================================== -->
    <!-- CONTEUDO INSTITUCIONAL -->
    <!-- ====================================================== -->

<?php require __DIR__ . '/../layout/page-open.php'; ?>

              <p>
                Resgatando dignidade, fortalecendo famílias e devolvendo
                esperança desde 1982.
              </p>

              <h4>&#9829; A Associação Antialcoólica de Taquaritinga</h4>

              <p>
                Somos uma entidade sem fins lucrativos, que há mais 30 anos
                temos como maior e único objetivo resgatar a dignidade e
                devolver a esperança àqueles que nos procuram, ajudamos pessoas
                que tenham alguma ligação ruim com alcoolismo e drogas.
              </p>

              <p>
                Apenas contamos com a colaboração de pessoas que apoiam nossa
                causa.
              </p>

              <p>
                Os tratamentos é realizado por meio de uma terapia de grupo, em
                que cada um compartilha sua história com o restante das pessoas,
                de como era sua vida antes de conhecer a associação e depois.
              </p>

              <p>
                O nosso remédio é dado pela boca e tomado pelo ouvido. Se a
                pessoa não frequenta as reuniões, geralmente ela recai.
              </p>

              <p>Atuamos no apoio e fortalecimento da base familiar.</p>

              <p>
                Realizamos diversas palestras de conscientização como álcool,
                tabaco e outras drogas.
              </p>

              <h4>&#9829; Histórico</h4>

              <p>Fundação: <?= e($SITE['fundacao']) ?></p>

              <p>
                A iniciativa começou com um grupo de religiosos da Igreja
                Católica.
              </p>

              <p>RESPONSÁVEIS/PRESIDENTE: MARIA JOSÉ OLIVEIRA MATEUS</p>

              <h4>&#9829; Atuação</h4>

              <p>180 pessoas semanais</p>
              <p>720 pessoas mensalmente</p>
              <p>8640 pessoas anualmente</p>

              <h4>&#9829; Evite o primeiro gole</h4>

<?php require __DIR__ . '/../layout/page-close.php'; ?>
