<?php
$titulo_pagina = "Obrigado";
$descricação_pagina = "Sua mensagem foi enviada com sucesso. Em breve entraremos em contato.";
require_once 'header.php';
?>

<section class="section-padding mt-100 mb-100">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-check-circle-fill text-success display-1 mb-4"></i>
                <h1 class="mb-4">Obrigado pelo seu contato!</h1>
                <p class="lead text-muted mb-5">Sua mensagem foi enviada com sucesso. Nossa equipe analisará sua solicitação e entrará em contato o mais breve possível.</p>
                <a href="<?php echo link_site(); ?>" class="btn btn-primary btn-lg">Voltar para a Home</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
