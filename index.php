<?php
$titulo_pagina = "Advocacia Especializada";
$descricação_pagina = "Escritório de advocacia com atendimento humanizado e soluções jurídicas eficazes em Direito Civil, Trabalhista, Empresarial e muito mais.";
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('<?php echo link_site('assets/images/imagem01.jpg'); ?>');">
    <div class="container">
        <div class="hero-content">
            <span>Justiça e Compromisso</span>
            <h1>Defendemos seus direitos com compromisso e excelência</h1>
            <p class="lead mb-5 opacity-75">Advocacia dedicada a proteger seus interesses e garantir seus direitos com soluções inovadoras e atendimento personalizado.</p>
            <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-gold">Agendar reunião</a>
        </div>
    </div>
</section>

<!-- About Zeus -->
<section class="section-padding about-zeus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="section-label">O Escritório</span>
                <h2 class="display-5 mb-4"><?php echo $escritorio; ?></h2>
                <div class="pe-lg-4">
                    <p class="lead mb-4">Referência em soluções jurídicas complexas, nosso escritório combina tradição e inovação para entregar resultados excepcionais.</p>
                    <p><?php echo $descricação; ?></p>
                    <p>Contamos com uma equipe multidisciplinar comprometida com a Ética, a transparência e a busca incessante pela justiça em cada caso que assumimos.</p>
                    <a href="<?php echo link_site('institucional'); ?>" class="btn btn-outline-primary mt-4">Saiba mais sobre nós</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image ps-lg-4">
                    <img src="<?php echo link_site('assets/images/imagem08.png'); ?>" alt="Nosso Escritório" class="img-fluid rounded shadow" style="aspect-ratio: 3/2; object-fit: cover; object-position: bottom;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Areas Dark -->
<section class="section-padding areas-dark">
    <div class="container">
        <div class="section-title">
            <h2 class="display-5">Áreas de atuação</h2>
            <p>Conheça nossas principais Áreas de especializações</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-briefcase"></i>
                    <h4>Direito civil</h4>
                    <p>Assessoria completa em contratos, responsabilidade civil e direitos de propriedade.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-person-heart"></i>
                    <h4>Direito de família</h4>
                    <p>Tratamento humanizado em questões de divórcio, guarda e sucessões.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-building"></i>
                    <h4>Direito do trabalho</h4>
                    <p>Defesa estratégica nas relações entre empregadores e empregados.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-shield-lock"></i>
                    <h4>Direito penal</h4>
                    <p>Atuação técnica e diligente na defesa de direitos fundamentais e garantias individuais.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4>Direito contratual</h4>
                    <p>Elaboração e análise minuciosa de instrumentos jurídicos para segurança dos negócios.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="area-card">
                    <i class="bi bi-bank"></i>
                    <h4>Direito empresarial</h4>
                    <p>Consultoria jurídica para o crescimento sustentável e seguro da sua empresa.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo link_site('areas-de-atuacao'); ?>" class="btn btn-outline-secondary">Ver todas as Áreas</a>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="news" class="section-padding blog-modern">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-md-8">
                <h2 class="display-5">Notícias Jurídicas</h2>
                <p class="text-muted">Últimas notícias e artigos do mundo jurídico</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="https://jurisite.com.br/noticias_juridicas/" target="_blank" class="btn btn-link text-primary p-0">Ver todas <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $materias = get_materias();
            if ($materias):
                foreach ($materias as $materia):
            ?>
            <div class="col-md-4">
                <div class="news-card-modern h-100 shadow-sm">
                    <span class="date mb-2 d-block"><?php echo date('d/m/Y', strtotime($materia->pubdate)); ?></span>
                    <h4 class="mb-3"><?php echo $materia->title; ?></h4>
                    <p class="text-muted small mb-4"><?php echo limitar_texto($materia->description, 150); ?></p>
                    <a href="<?php echo $materia->link; ?>" target="_blank" class="read-more-link">Leia mais <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>

