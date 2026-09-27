    <!-- ====================================================== -->
    <!-- PREDIO -->
    <!-- ====================================================== -->

    <section class="pb-4 predio">
      <div class="container">
        <img
          src="<?= asset('img/predio.png') ?>"
          class="img-fluid w-100"
          alt="Sede da Associação Antialcoólica de Taquaritinga"
          loading="lazy"
          decoding="async"
        />
      </div>
    </section>

    <!-- ====================================================== -->
    <!-- REDES -->
    <!-- ====================================================== -->

    <section class="social-section py-1">
      <div class="container text-center">
        <h2>Redes Sociais</h2>

        <p class="mb-3">
          Entre em contato conosco ou acompanhe nossas atividades.
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="mailto:<?= e($SITE['email']) ?>" class="social-btn">
            <i class="fa-solid fa-envelope"></i>
            E-mail
          </a>

          <a href="<?= e($SITE['facebook']) ?>" target="_blank" rel="noopener" class="social-btn">
            <i class="fa-brands fa-facebook-f"></i>
            Facebook
          </a>
        </div>
      </div>
    </section>

    <!-- ====================================================== -->
    <!-- FOOTER -->
    <!-- ====================================================== -->

    <footer class="py-3 text-center">
      <div class="container">
        <small>
          &copy; <?= date('Y') ?> <?= e($SITE['nome']) ?>. Todos os direitos
          reservados
        </small>
      </div>
    </footer>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($SITE['analytics']) ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "<?= e($SITE['analytics']) ?>");
    </script>
  </body>
</html>
