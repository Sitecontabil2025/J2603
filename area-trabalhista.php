<?php
$titulo_pagina = "Direito Trabalhista";
$descricação_pagina = "Defesa estratégica e assessoria jurídica completa nas relações entre empregados e empregadores.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem04.jpg'); ?>'); min-height: 300px;">
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
                <h2 class="mb-4">Especialistas em Relações de Trabalho</h2>
                <p>O ambiente de trabalho é dinâmico e complexo. Nossa atuação em Direito Trabalhista visa garantir que tanto empregados quanto empregadores tenham seus direitos e deveres respeitados, buscando sempre o equilíbrio e a conformidade com a CLT e legislações esparsas.</p>
                <p>Para o empregado, buscamos a reparação de injustiças e o recebimento de verbas devidas. Para a empresa, oferecemos uma consultoria preventiva robusta, visando reduzir o passivo trabalhista e otimizar a gestão de RH.</p>
                
                <h3 class="h4 mt-5 mb-4">Destaques de Atuação:</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Reclamações Trabalhistas</h5>
                                <p class="text-muted small">Ações para recebimento de verbas rescisórias, horas extras e FGTS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Danos Morais e Assédio</h5>
                                <p class="text-muted small">Defesa em casos de assédio moral, sexual e doenças ocupacionais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Compliance Trabalhista</h5>
                                <p class="text-muted small">Auditoria e consultoria preventiva para empresas de todos os portes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Defesa Patronal</h5>
                                <p class="text-muted small">Representação de empresas em dissídios individuais e coletivos.</p>
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

