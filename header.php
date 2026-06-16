<?php
require_once 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo $titulo_pagina . ' | ' . $escritorio; ?></title>
    <meta name="description" content="<?php echo $descricação_pagina; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $escritorio; ?>">
    <link rel="canonical" href="<?php echo url_atual(); ?>">
    
    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo url_atual(); ?>">
    <meta property="og:title" content="<?php echo $titulo_pagina . ' | ' . $escritorio; ?>">
    <meta property="og:description" content="<?php echo $descricação_pagina; ?>">
    <meta property="og:image" content="<?php echo link_site('assets/images/imagem01.jpg'); ?>">

    <!-- Twitter Cards -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo url_atual(); ?>">
    <meta property="twitter:title" content="<?php echo $titulo_pagina . ' | ' . $escritorio; ?>">
    <meta property="twitter:description" content="<?php echo $descricação_pagina; ?>">
    <meta property="twitter:image" content="<?php echo link_site('assets/images/imagem01.jpg'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo link_site('assets/css/style.css'); ?>">
    <link rel="icon" type="image/png" href="<?php echo link_site('assets/images/icone.png'); ?>">

    <style>
        :root {
            --primary-color: <?php echo $cor; ?>;
            --secondary-color: #c49b4c;
        }
    </style>
</head>
<body>

<header>
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="me-4"><i class="bi bi-telephone-fill me-2 text-secondary"></i> <?php echo $telefone; ?></span>
                    <span><i class="bi bi-envelope-fill me-2 text-secondary"></i> <?php echo $email; ?></span>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-links d-inline-block">
                        <?php if(!empty($facebook)): ?><a href="<?php echo $facebook; ?>" target="_blank" class="ms-3"><i class="bi bi-facebook"></i></a><?php endif; ?>
                        <?php if(!empty($instagram)): ?><a href="<?php echo $instagram; ?>" target="_blank" class="ms-3"><i class="bi bi-instagram"></i></a><?php endif; ?>
                        <?php if(!empty($linkedin)): ?><a href="<?php echo $linkedin; ?>" target="_blank" class="ms-3"><i class="bi bi-linkedin"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo link_site(); ?>">
                <img src="<?php echo link_site('assets/images/logo.png'); ?>" alt="<?php echo $escritorio; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?php echo is_home() ? 'active' : ''; ?>" href="<?php echo link_site(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo link_site('institucional'); ?>">Sobre</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Áreas de atuação
                        </a>
                        <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo link_site('area-civil'); ?>">Direito civil</a></li>
                            <li><a class="dropdown-item" href="<?php echo link_site('area-trabalhista'); ?>">Direito trabalhista</a></li>
                            <li><a class="dropdown-item" href="<?php echo link_site('area-empresarial'); ?>">Direito empresarial</a></li>
                            <li><a class="dropdown-item" href="<?php echo link_site('area-tributaria'); ?>">Direito tributário</a></li>
                            <li><a class="dropdown-item" href="<?php echo link_site('area-familia'); ?>">Direito de família</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item fw-bold" href="<?php echo link_site('areas-de-atuacao'); ?>">Todas as Áreas de atuação</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo link_site('links-uteis'); ?>">Links Úteis</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo link_site('contato'); ?>">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

