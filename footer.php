<footer class="mt-auto">
    <div class="container">
        <div class="row g-5">
            <!-- About -->
            <div class="col-lg-4">
                <img src="<?php echo link_site('assets/images/logo.png'); ?>" alt="<?php echo $escritorio; ?>" class="mb-4" style="height: 70px; filter: brightness(0) invert(1);">
                <p class="opacity-75"><?php echo $descricação; ?></p>
                <div class="social-links mt-4">
                    <?php if (!empty($facebook)): ?>
                        <a href="<?php echo $facebook; ?>" target="_blank" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($instagram)): ?>
                        <a href="<?php echo $instagram; ?>" target="_blank" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($linkedin)): ?>
                        <a href="<?php echo $linkedin; ?>" target="_blank" class="me-3"><i class="bi bi-linkedin fs-5"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Links -->
            <div class="col-lg-2 col-md-4">
                <h5>Institucional</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo link_site(); ?>">Home</a></li>
                    <li><a href="<?php echo link_site('institucional'); ?>">Sobre nós</a></li>
                    <li><a href="<?php echo link_site('areas-de-atuacao'); ?>">Especialidades</a></li>
                    <li><a href="<?php echo link_site('contato'); ?>">Fale conosco</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-4">
                <h5>Áreas de Atuação</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo link_site('area-civil'); ?>">Direito civil</a></li>
                    <li><a href="<?php echo link_site('area-trabalhista'); ?>">Direito trabalhista</a></li>
                    <li><a href="<?php echo link_site('area-familia'); ?>">Direito de família</a></li>
                    <li><a href="<?php echo link_site('area-empresarial'); ?>">Direito empresarial</a></li>
                    <li><a href="<?php echo link_site('area-tributaria'); ?>">Direito tributário</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled contact-info">
                    <li class="d-flex mb-3">
                        <i class="bi bi-geo-alt-fill text-secondary me-3"></i>
                        <span><?php echo $endereco; ?>, <?php echo $bairro; ?> <br> <?php echo $cidade; ?></span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-telephone-fill text-secondary me-3"></i>
                        <a href="<?php echo phone_link($telefone); ?>"><?php echo $telefone; ?></a>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-whatsapp text-secondary me-3"></i>
                        <a href="<?php echo whatsapp_link(); ?>" target="_blank"><?php echo $whatsapp; ?></a>
                    </li>
                    <li class="d-flex">
                        <i class="bi bi-envelope-fill text-secondary me-3"></i>
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container text-center">
            <p class="mb-0">&copy; <?php echo ano_copy(2026); ?> <?php echo $escritorio; ?>. Todos os direitos reservados. 
               Desenvolvido por <a href="https://jurisite.com.br/modelos" target="_blank">Jurisite</a></p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp -->
<a href="<?php echo whatsapp_link(); ?>" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- LGPD Banner -->
<div id="lgpd-banner" class="lgpd-banner">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between p-4 bg-white shadow rounded-4 border">
            <div class="pe-md-4 mb-3 mb-md-0">
                <p class="mb-0 small">Utilizamos cookies para oferecer uma melhor experiência, melhorar o desempenho e analisar como você interage em nosso site. Ação utilizar este site, você concorda com o uso de cookies conforme nossa <a href="<?php echo link_site('politica-de-cookies'); ?>" class="text-secondary fw-bold">Política de Cookies</a>.</p>
            </div>
            <div class="flex-shrink-0">
                <button id="btn-lgpd" class="btn btn-primary px-4">Prosseguir</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Navbar Scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled shadow-sm');
        } else {
            navbar.classList.remove('scrolled shadow-sm');
        }
    });

    // LGPD
    if (!localStorage.getItem('lgpd-accepted')) {
        document.getElementById('lgpd-banner').style.display = 'block';
    }

    document.getElementById('btn-lgpd').addEventListener('click', function() {
        localStorage.setItem('lgpd-accepted', 'true');
        document.getElementById('lgpd-banner').style.display = 'none';
    });
</script>

</body>
</html>
