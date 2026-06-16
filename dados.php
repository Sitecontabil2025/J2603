<?php
$escritorio = "Escritório Jurídico";
$descricação = "Somos um Escritório Jurídico especializado em diversas Áreas do Direito, composto por profissionais experientes e dedicados a oferecer soluções personalizadas nas Áreas de Direito Empresarial, Trabalhista, Civil e Tributário.";
$keywords = "advocacia, jurídico, escritório, serviços jurídicos, direito trabalhista, direito empresarial, direito civil, consultoria jurídica";
$cor = "#002147";
$site = "https://dominio.com.br";

$endereco = "Nome da Rua, 00";
$bairro = "Centro";
$cidade = "Cidade / UF";
$cep = "00000-000";

$mapa_link = "https://maps.app.goo.gl/27kbPHTYNfeC4Hg37";
$mapa_iframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.499507577864!2d-49.62483992377856!3d-22.894939837449364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c06a39daf95555%3A0x4243758b396d07a2!2sSitecontabil!5e0!3m2!1spt-BR!2sbr!4v1776706056083!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

$email = "contato@dominio.com.br";
$telefone = "(00) 0000-0000";
$whatsapp = "(00) 9.0000-0000";

function whatsapp_link($texto = null, $num = null){
    global $whatsapp;
    $whats = $num ?: $whatsapp;
    $whats = str_replace(array('(', ')', ' ', '-', '.'), "", $whats);
    $link = 'https://wa.me/55';

    if (!empty($texto)):
        return $link . $whats . '?text=' . $texto;
    else:
        return $link . $whats;
    endif;
}

function phone_link($phone){
    $url = 'tel:';
    $phone = preg_replace("/[^0-9]/", '', $phone);
    $retorno = $url . $phone;
    return $retorno;
}

// LINKS DAS REDES SOCIAIS
$facebook = "https://facebook.com";
$instagram = "https://instagram.com";
$linkedin = "https://linkedin.com";
$twitter = "https://x.com";

// CONFIGURAÇÕES SMTP PARA PHPMAILER
$smtp_host = 'smtp.dominio.com.br';
$smtp_user = 'user@dominio.com.br';
$smtp_pass = 'senha_smtp';
$smtp_port = 587; // 465 ou 587
$smtp_secure = 'tls'; // 'tls' ou 'ssl'

// ANO DESENVOLVIMENTO DO SITE
function ano_copy($ano = 2026){
    if ($ano < date('Y')):
        return $ano . ' - ' . date('Y');
    else:
        return $ano;
    endif;
}

// VERIFICANDO SE EXISTE TÍTULO E DESCRIÇÃO DE PÁGINA
if (!isset($titulo_pagina)):
    $titulo_pagina = "Bem-vindo ação nosso site";
endif;

if (!isset($descricação_pagina)):
    $descricação_pagina = $descricação;
endif;

// FUNÇÃO PARA CRIAR RESUMO DE TEXTO
function limitar_texto($texto, $limite = 250){
    $contador = strlen($texto);
    if ($contador >= $limite) :
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), " ")) . "...";
        return trim($texto);
    else :
        return trim($texto);
    endif;
}

// FUNÇÃO PARA CRIAR CARREGAR NOTÍCIAS JSON
function get_json($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);

    if ($result) return $result;
    else return null;
}

// FUNÇÃO PARA PEGAR MATÉRIAS
function get_materias($url = "https://jurisite.com.br/noticias_juridicas/json?limite=3"){
    return json_decode(get_json($url));
}

// FUNÇÃO PARA MODIFICAR A REGIÃO
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sação_Paulo");

function link_site($link = null){
    $base = $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER['HTTP_HOST'] . str_replace( basename( $_SERVER['SCRIPT_NAME'] ) , '', $_SERVER['SCRIPT_NAME'] );
    
    if (!empty($link)):
        return $base . $link;
    else:
        return $base;
    endif;
}

function url_atual(){
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function is_home() {
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $scriptDir = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']), '/');

    if ($scriptDir && strpos($uri, $scriptDir) === 0) {
        $uri = trim(substr($uri, strlen($scriptDir)), '/');
    }

    return $uri === '';
}
