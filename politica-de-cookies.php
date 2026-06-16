<?php
$titulo_pagina = "Política de Cookies";
$descricação_pagina = "Saiba como utilizamos cookies e como protegemos seus dados de acordo com a LGPD.";
require_once 'header.php';
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem15.png'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white">Política de Cookies</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Política de Cookies</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content -->
<section class="section-padding py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content shadow-sm p-4 p-md-5 bg-white rounded-4 border">
                    <p class="lead text-muted">Esta Política de Cookies explica como utilizamos cookies e tecnologias semelhantes em nosso site para garantir uma melhor experiência ação usuário, em conformidade com a Lei Geral de Proteção de Dados (LGPD).</p>

                    <h3 class="mt-5 mb-3 text-secondary">1. O que são Cookies?</h3>
                    <p>Cookies são pequenos arquivos de texto que são armazenados no seu computador ou dispositivo móvel quando você visita um site. Eles ajudam o site a reconhecer o seu dispositivo e a lembrar informações sobre a sua visita, como as suas preferências de idioma, tamanhos de letra e outras definições de visualização.</p>

                    <h3 class="mt-4 mb-3 text-secondary">2. Como utilizamos os Cookies?</h3>
                    <p>Utilizamos cookies para diversos fins, incluindo:</p>
                    <ul>
                        <li><strong>Cookies Essenciais:</strong> Necessários para o funcionamento do site e para permitir que você navegue e utilize os nossos recursos.</li>
                        <li><strong>Cookies de Desempenho:</strong> Coletam informações sobre como os visitantes utilizam o site, permitindo-nos melhorar a navegação e o conteúdo.</li>
                        <li><strong>Cookies de Funcionalidade:</strong> Permitem que o site se lembre das escolhas que você faz e forneça recursos mais personalizados.</li>
                    </ul>

                    <h3 class="mt-4 mb-3 text-secondary">3. LGPD e Consentimento</h3>
                    <p>Em conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018), solicitamos o seu consentimento para o uso de cookies não essenciais. Você pode alterar suas preferências a qualquer momento ou recusar o uso de cookies através das configurações do seu navegador.</p>

                    <h3 class="mt-4 mb-3 text-secondary">4. Gestão de Cookies</h3>
                    <p>A maioria dos navegadores permite que você controle os cookies através das suas configurações. No entanto, se você optar por bloquear todos os cookies, poderá não conseguir acessar certas partes do nosso site ou a sua experiência poderá ser afetada.</p>
                    <p>Para gerir os cookies no seu navegador, consulte a seção de ajuda do mesmo.</p>

                    <h3 class="mt-4 mb-3 text-secondary">5. Atualizações desta Política</h3>
                    <p>Podemos atualizar esta Política de Cookies periodicamente para refletir mudanças em nossas Práticas ou por razões operacionais, legais ou regulamentares. Recomendamos que você revise esta página regularmente.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
