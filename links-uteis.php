<?php
$titulo_pagina = "Links Úteis";
$descricação_pagina = "Links e recursos úteis selecionados pelo nosso escritório de advocacia para auxiliar você.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem14.png'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white">Links Úteis</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Links Úteis</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Links Content -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 bg-light shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-bank text-primary display-5 mb-3"></i>
                        <h3 class="h4">Tribunais superiores</h3>
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="mb-2"><a href="https://www.stf.jus.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> STF - Supremo Tribunal Federal</a></li>
                            <li class="mb-2"><a href="https://www.stj.jus.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> STJ - Superior Tribunal de Justiça</a></li>
                            <li class="mb-2"><a href="https://www.tst.jus.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> TST - Tribunal Superior do Trabalho</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 bg-light shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-text text-primary display-5 mb-3"></i>
                        <h3 class="h4">Legislação e consultas</h3>
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="mb-2"><a href="http://www.planalto.gov.br/ccivil_03/constituicação/constituicação.htm" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> Constituição Federal</a></li>
                            <li class="mb-2"><a href="http://www4.planalto.gov.br/legislacação" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> Portal da Legislação</a></li>
                            <li class="mb-2"><a href="https://scon.stj.jus.br/SCON/" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> Pesquisa de Jurisprudência</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 bg-light shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-shield-lock text-primary display-5 mb-3"></i>
                        <h3 class="h4">Conselhos e órgãos</h3>
                        <ul class="list-unstyled mb-0 mt-3">
                            <li class="mb-2"><a href="https://www.oab.org.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> OAB Nacional</a></li>
                            <li class="mb-2"><a href="https://www.cnj.jus.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> CNJ - Conselho Nacional de Justiça</a></li>
                            <li class="mb-2"><a href="https://www.receita.fazenda.gov.br" target="_blank" class="text-decoration-none text-muted"><i class="bi bi-link-45deg"></i> Receita Federal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jurisite Utilities Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="bg-primary text-white p-5 rounded shadow">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="text-white">Ferramentas de apoio jurídico</h2>
                            <p class="mb-0 opacity-75">Confira ferramentas essenciais para sua prática jurídica diária, desde dicionários até consulta de súmulas.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="https://www.jurisite.com.br/utilitarios" target="_blank" class="btn btn-light btn-lg">Acessar ferramentas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>

