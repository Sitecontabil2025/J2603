<?php
$titulo_pagina = "Direito Empresarial";
$descricação_pagina = "Consultoria jurídica estratégica para o crescimento seguro, estruturação e conformidade de sua empresa.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem05.jpg'); ?>'); min-height: 300px;">
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
                <h2 class="mb-4">Soluções Jurídicas para o Seu Negócio</h2>
                <p>O sucesso de uma empresa depende de uma base jurídica sólida. Nossa atuação em Direito Empresarial é focada em oferecer segurança para o crescimento sustentável do seu negócio, desde a escolha do melhor modelo societário até a proteção da marca e propriedade intelectual.</p>
                <p>Atendemos startups, médias e grandes empresas, oferecendo um suporte jurídico 360º que abrange todas as necessidades do cotidiano corporativo.</p>
                
                <h3 class="h4 mt-5 mb-4">Serviços Especializados:</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Planejamento Societário</h5>
                                <p class="text-muted small">Constituição, alteração e dissolução de sociedades empresariais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Contratos Mercantis</h5>
                                <p class="text-muted small">Franquias, representação comercial, distribuição e logística.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>M&A (Fusões e Aquisições)</h5>
                                <p class="text-muted small">Due diligence jurídica e assessoria em negociações societárias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Recuperação de Créditos</h5>
                                <p class="text-muted small">Estratégias judiciais e extrajudiciais para redução da inadimplência.</p>
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

