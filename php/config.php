<?php
// Detecção do protocolo
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

// Detecta a porta
$port = $_SERVER['SERVER_PORT'];
$defaultPort = ($protocol == 'https') ? 443 : 80;

// Monta a porta na URL apenas se for diferente da padrão
$portPart = ($port != $defaultPort) ? ':' . $port : '';

// Define o host (ex: mistercookies.local:8080)
$host = $_SERVER['HTTP_HOST'];

// Caminho base (ex: se o projeto estiver em subpasta, ex: /meuprojeto)
// Se estiver na raiz, pode deixar como vazio ou ajustar manualmente se quiser
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

// Define a URL base completa
define('URL', $protocol . '://' . $host . '/');

// Caminho físico até a pasta raiz do projeto (no sistema de arquivos)
define('IMG_PATH', URL . 'images/');
define('CSS_PATH', URL . 'css/');
define('JS_PATH', URL . 'js/');

define('ROOT', rtrim($_SERVER['DOCUMENT_ROOT'], '/\\') . '/');
// Opcional: Configurações para debug
define('DEBUG', true);
?>