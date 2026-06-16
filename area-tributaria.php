<?php
$titulo_pagina = "Direito Tributário";
$descricação_pagina = "Planejamento tributário estratégico, contencioso e soluções para otimização fiscal de sua empresa.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem06.jpg'); ?>'); min-height: 300px;">
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
                <h2 class="mb-4">Inteligência Jurídica e Fiscal</h2>
                <p>A carga tributária brasileira é uma das mais complexas do mundo. Nossa atuação visa desonerar o seu negócio e o seu patrimônio pessoal através de estratégias lícitas de planejamento tributário e uma defesa combativa contra cobranças indevidas.</p>
                <p>Trabalhamos com foco na legalidade e na eficiência financeira, garantindo que você pague apenas o estritamente necessário e recupere valores pagos indevidamente ação fisco.</p>
                
                <h3 class="h4 mt-5 mb-4">Nossa Expertise Tributária:</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Recuperação de Tributos</h5>
                                <p class="text-muted small">Identificação e restituição de impostos pagos a maior nos últimos 5 anos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Planejamento Tributário</h5>
                                <p class="text-muted small">Estudo de cenários para redução lícita da carga tributária (Elisão Fiscal).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Defesa Administrativa e Judicial</h5>
                                <p class="text-muted small">Contestações de autos de infração e execuções fiscais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Consultoria de ICMS/ISS/IPI</h5>
                                <p class="text-muted small">Análise de créditos e benefícios fiscais específicos para o seu setor.</p>
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

