<?php
$titulo_pagina = "Áreas de Atuação";
$descricação_pagina = "Atuação especializada em Direito Civil, Trabalhista, Empresarial, Tributário e de Família com foco em resultados.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem12.png'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white">Nossas Áreas de atuação</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Áreas de Atuação</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Areas Content -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Area 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card-modern h-100 shadow-sm border-0">
                    <div class="card-img-container">
                        <img src="<?php echo link_site('assets/images/imagem03.jpg'); ?>" class="img-fluid service-img rounded" alt="Direito Civil">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3">Direito civil</h3>
                        <p class="text-muted small">Atuamos em diversas frentes do Direito Civil, incluindo obrigações, contratos, responsabilidade civil e propriedade.</p>
                        <a href="<?php echo link_site('area-civil'); ?>" class="btn-link-modern">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Area 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card-modern h-100 shadow-sm border-0">
                    <div class="card-img-container">
                        <img src="<?php echo link_site('assets/images/imagem04.jpg'); ?>" class="img-fluid service-img rounded" alt="Direito Trabalhista">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3">Direito trabalhista</h3>
                        <p class="text-muted small">Assessoria jurídica completa para trabalhadores e empresas, buscando o equilíbrio nas relações laborais.</p>
                        <a href="<?php echo link_site('area-trabalhista'); ?>" class="btn-link-modern">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Area 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card-modern h-100 shadow-sm border-0">
                    <div class="card-img-container">
                        <img src="<?php echo link_site('assets/images/imagem05.jpg'); ?>" class="img-fluid service-img rounded" alt="Direito Empresarial">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3">Direito empresarial</h3>
                        <p class="text-muted small">Suporte jurídico estratégico para empresas, auxiliando desde a constituição até a gestão de contratos.</p>
                        <a href="<?php echo link_site('area-empresarial'); ?>" class="btn-link-modern">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Area 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card-modern h-100 shadow-sm border-0">
                    <div class="card-img-container">
                        <img src="<?php echo link_site('assets/images/imagem06.jpg'); ?>" class="img-fluid service-img rounded" alt="Direito Tributário">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3">Direito tributário</h3>
                        <p class="text-muted small">Atuação preventiva e contenciosa na esfera tributária, visando a otimização da carga fiscal.</p>
                        <a href="<?php echo link_site('area-tributaria'); ?>" class="btn-link-modern">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Area 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card-modern h-100 shadow-sm border-0">
                    <div class="card-img-container">
                        <img src="<?php echo link_site('assets/images/imagem07.png'); ?>" class="img-fluid service-img rounded" alt="Direito de Família">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3">Direito de família</h3>
                        <p class="text-muted small">Tratamos de questões familiares com a sensibilidade e discrição necessárias para cada caso.</p>
                        <a href="<?php echo link_site('area-familia'); ?>" class="btn-link-modern">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Area 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm border-0 text-center bg-primary text-white p-4 d-flex align-items-center justify-content-center h-100">
                    <div>
                        <i class="bi bi-info-circle display-3 mb-3"></i>
                        <h3>E Mais...</h3>
                        <p class="opacity-75">Também atuamos em Direito do Consumidor, Administrativo e Ambiental.</p>
                        <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-light mt-3">Consultar agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>

