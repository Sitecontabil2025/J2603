<?php
$titulo_pagina = "Direito de Família";
$descricação_pagina = "Atendimento humanizado e especializado em questões de divórcio, guarda, pensão e sucessões.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem07.png'); ?>'); min-height: 300px;">
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
                <h2 class="mb-4">Soluções para os Momentos Mais Importantes</h2>
                <p>O Direito de Família exige não apenas rigor técnico, mas também sensibilidade e empatia. Entendemos que por trás de cada processo existem pessoas e histórias, por isso priorizamos soluções consensuais que preservem os laços familiares e garantam o bem-estar dos envolvidos.</p>
                <p>Nossa atuação em sucessões foca na preservação do patrimônio e na agilidade dos procedimentos, visando reduzir o desgaste emocional durante o inventário.</p>
                
                <h3 class="h4 mt-5 mb-4">Principais Demandas Familiares:</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Divórcio e Partilha</h5>
                                <p class="text-muted small">Divórcio judicial ou extrajudicial com foco na justa divisão de bens.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Pensão e Guarda</h5>
                                <p class="text-muted small">Fixação, revisão e exoneração de alimentos, além de definição de guarda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Inventários e Testamentos</h5>
                                <p class="text-muted small">Procedimentos ágeis para transferência de bens açãos herdeiros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                            <div>
                                <h5>Planejamento Sucessório</h5>
                                <p class="text-muted small">Estruturação da sucessão em vida para evitar conflitos futuros.</p>
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

