<?php
$titulo_pagina = "Sobre Nós";
$descricação_pagina = "Conheça nossa história, nossos valores e nosso compromisso com a Ética e a excelência jurídica.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem10.png'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white">Sobre o nosso escritório</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Institucional</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="<?php echo link_site('assets/images/imagem11.png'); ?>" alt="Institucional" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h2 class="mb-4">Quem somos</h2>
                <p><?php echo $descricação; ?></p>
                <p>O <strong><?php echo $escritorio; ?></strong> nasceu com a missão de prover serviços jurídicos de alta qualidade, pautados pela Ética, transparência e pelo compromisso inabalável com os interesses de nossos clientes.</p>
                <p>Nossa equipe é formada por profissionais com sólida formação acadêmica e vasta experiência Prática em diversas Áreas do Direito. Acreditamos que a advocacia moderna exige não apenas conhecimento técnico, mas também uma visão estratégica e multidisciplinar dos desafios enfrentados por nossos clientes.</p>
            </div>
        </div>

        <div class="row mt-100">
            <div class="col-md-4 mb-4">
                <div class="card h-100 bg-light p-4 text-center border-0">
                    <div class="card-body">
                        <i class="bi bi-bullseye text-primary display-5 mb-3"></i>
                        <h3>Missão</h3>
                        <p class="text-muted">Oferecer soluções jurídicas eficazes e personalizadas, contribuindo para a segurança jurídica e o sucesso de nossos clientes, sempre pautados pela Ética e excelência técnica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 bg-light p-4 text-center border-0">
                    <div class="card-body">
                        <i class="bi bi-eye text-primary display-5 mb-3"></i>
                        <h3>Visão</h3>
                        <p class="text-muted">Ser reconhecido como referência em advocacia de excelência, destacando-se pela inovação no atendimento, agilidade nos processos e resultados sólidos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 bg-light p-4 text-center border-0">
                    <div class="card-body">
                        <i class="bi bi-award text-primary display-5 mb-3"></i>
                        <h3>Valores</h3>
                        <p class="text-muted">Ética, Transparência, Compromisso com o Cliente, Excelência Técnica, Valorização Profissional e Responsabilidade Social.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Snippet -->
<section class="section-padding bg-dark text-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="display-4 fw-bold text-light mb-2">15+</div>
                <div class="text-uppercase small opacity-75">Anos de experiência</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="display-4 fw-bold text-light mb-2">500+</div>
                <div class="text-uppercase small opacity-75">Casos encerrados</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="display-4 fw-bold text-light mb-2">300+</div>
                <div class="text-uppercase small opacity-75">Clientes satisfeitos</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="display-4 fw-bold text-light mb-2">12+</div>
                <div class="text-uppercase small opacity-75">Áreas de Atuação</div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>

