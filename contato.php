<?php
$titulo_pagina = "Contato";
$descricação_pagina = "Entre em contato conosco para agendar uma consulta ou tirar suas dúvidas com nossos especialistas.";
require_once 'header.php';

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Form Handling
$mensagem_erro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email_remetente = $_POST['email'] ?? '';
    $fone = $_POST['fone'] ?? '';
    $assunto = $_POST['assunto'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    if (!empty($nome) && !empty($email_remetente) && !empty($mensagem)) {
        
        $mail = new PHPMailer(true);
        try {
            // SMTP Settings from dados.php
            $mail->isSMTP();
            $mail->Host       = $smtp_host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtp_user;
            $mail->Password   = $smtp_pass;
            $mail->SMTPSecure = $smtp_secure;
            $mail->Port       = $smtp_port;
            $mail->CharSet    = 'UTF-8';

            // Recipients
            $mail->setFrom($smtp_user, $escritorio);
            $mail->addAddress($email); 
            $mail->addReplyTo($email_remetente, $nome);

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Contato via Site: $assunto";
            $mail->Body    = "<h2>Nova mensagem recebida pelo site</h2>
                              <p><strong>Nome:</strong> $nome</p>
                              <p><strong>E-mail:</strong> $email_remetente</p>
                              <p><strong>Telefone:</strong> $fone</p>
                              <p><strong>Assunto:</strong> $assunto</p>
                              <p><strong>Mensagem:</strong><br>" . nl2br($mensagem) . "</p>";

            $mail->send();
            header("Location: " . link_site('obrigado'));
            exit;
        } catch (Exception $e) {
            // Log error if needed, for now redirect anyway or show error
            // Since we might not have a working SMTP right now, I'll redirect on error too if it's a "simulated" success
            // but the user wants it to WORK, so I'll show the error if it fails.
            $mensagem_erro = "Ocorreu um erro ação enviar sua mensagem: {$mail->ErrorInfo}";
        }
    } else {
        $mensagem_erro = "Por favor, preencha todos os campos obrigatórios.";
    }
}
?>

<!-- Internal Hero -->
<section class="hero-section hero-internal" style="background-image: url('<?php echo link_site('assets/images/imagem13.png'); ?>'); min-height: 300px;">
    <div class="container hero-content text-center py-5">
        <h1 class="display-4 text-white">Fale conosco</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?php echo link_site(); ?>" class="text-white opacity-75">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contato</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="bg-light p-5 rounded h-100">
                    <h2 class="h3 mb-4">Informações de contato</h2>
                    <p class="mb-5">Estamos prontos para atender você. Utilize um de nossos canais de comunicação ou preencha o formulário ação lado.</p>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-geo-alt-fill fs-3 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">Endereço</h5>
                            <p class="mb-0 text-muted"><?php echo $endereco; ?>, <?php echo $bairro; ?><br><?php echo $cidade; ?> - <?php echo $cep; ?></p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-telephone-fill fs-3 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">Telefone</h5>
                            <p class="mb-0"><a href="<?php echo phone_link($telefone); ?>" class="text-decoration-none text-muted"><?php echo $telefone; ?></a></p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-whatsapp fs-3 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">WhatsApp</h5>
                            <p class="mb-0"><a href="<?php echo whatsapp_link(); ?>" target="_blank" class="text-decoration-none text-muted"><?php echo $whatsapp; ?></a></p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-envelope-fill fs-3 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:<?php echo $email; ?>" class="text-decoration-none text-muted"><?php echo $email; ?></a></p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="mb-3">Redes Sociais</h5>
                        <div class="d-flex gap-3">
                            <a href="<?php echo $facebook; ?>" target="_blank" class="social-icon si-facebook"><i class="bi bi-facebook"></i></a>
                            <a href="<?php echo $instagram; ?>" target="_blank" class="social-icon si-instagram"><i class="bi bi-instagram"></i></a>
                            <a href="<?php echo $linkedin; ?>" target="_blank" class="social-icon si-linkedin"><i class="bi bi-linkedin"></i></a>
                            <a href="<?php echo $twitter; ?>" target="_blank" class="social-icon si-x"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8 ps-lg-5">
                <h2 class="mb-4">Envie uma mensagem</h2>
                
                <?php if ($mensagem_erro): ?>
                <div class="alert alert-danger"><?php echo $mensagem_erro; ?></div>
                <?php endif; ?>

                <form action="" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome Completo *</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="fone" class="form-label">Telefone / WhatsApp</label>
                        <input type="text" class="form-control" id="fone" name="fone">
                    </div>
                    <div class="col-md-6">
                        <label for="assunto" class="form-label">Assunto</label>
                        <select class="form-select form-control" id="assunto" name="assunto">
                            <option value="Consulta Jurídica">Consulta Jurídica</option>
                            <option value="Dúvidas Gerais">Dúvidas Gerais</option>
                            <option value="Trabalhe Conosco">Trabalhe Conosco</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="mensagem" class="form-label">Mensagem *</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar mensagem</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="map-section">
    <div class="ratio ratio-21x9">
        <?php echo $mapa_iframe; ?>
    </div>
</section>

<?php require_once 'footer.php'; ?>

