<?php
$titulo_pagina = "Direito Civil";
$descricação_pagina = "Assessoria jurídica especializada em Direito Civil, contratos, responsabilidade civil e direitos de propriedade.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem03.jpg'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white"><?php echo $titulo_pagina; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo link_site('areas-de-atuacao'); ?>" class="text-white opacity-75">Áreas de Atuação</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?php echo $titulo_pagina; ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">Assessoria Completa em Direito Civil</h2>
                <p>O Direito Civil é a base das relações jurídicas na sociedade. Nosso escritório oferece uma estrutura completa para lidar com as mais diversas demandas desta área, priorizando sempre a segurança jurídica e a proteção do patrimônio e dos direitos de nossos clientes.</p>
                <p>Atuamos tanto na esfera consultiva, prevenindo litígios através de contratos bem elaborados e orientações estratégicas, quanto na esfera contenciosa, defendendo seus interesses em processos judiciais de alta complexidade.</p>
                
                <h3 class="h4 mt-5 mb-4">Nossas Principais Atuações:</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Contratos</h5>
                                <p class="text-muted small">Elaboração, análise e revisão de contratos civis e comerciais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Responsabilidade Civil</h5>
                                <p class="text-muted small">Ações de indenização por danos morais e materiais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Direito de Propriedade</h5>
                                <p class="text-muted small">Questões possessórias, usucapião e regularização imobiliária.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Cobranças e Execuções</h5>
                                <p class="text-muted small">Recuperação de créditos e defesa em execuções de títulos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="card bg-light border-0 p-4">
                    <h4 class="mb-4">Outras Áreas</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3"><a href="<?php echo link_site('area-civil'); ?>" class="text-decoration-none text-muted"><i class="bi bi-chevron-right small text-primary me-2"></i> Direito Civil</a></li>
                        <li class="mb-3"><a href="<?php echo link_site('area-trabalhista'); ?>" class="text-decoration-none text-muted"><i class="bi bi-chevron-right small text-primary me-2"></i> Direito Trabalhista</a></li>
                        <li class="mb-3"><a href="<?php echo link_site('area-empresarial'); ?>" class="text-decoration-none text-muted"><i class="bi bi-chevron-right small text-primary me-2"></i> Direito Empresarial</a></li>
                        <li class="mb-3"><a href="<?php echo link_site('area-tributaria'); ?>" class="text-decoration-none text-muted"><i class="bi bi-chevron-right small text-primary me-2"></i> Direito Tributário</a></li>
                        <li class="mb-3"><a href="<?php echo link_site('area-familia'); ?>" class="text-decoration-none text-muted"><i class="bi bi-chevron-right small text-primary me-2"></i> Direito de Família</a></li>
                    </ul>
                    <hr>
                    <a href="<?php echo whatsapp_link("Olá, preciso de ajuda em ".$titulo_pagina."."); ?>" class="btn btn-primary w-100 mt-2"><i class="bi bi-whatsapp me-2"></i> Agendar Consulta</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>

