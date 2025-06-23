<?php
include 'config.php';

if (isset($_POST['footer-qst']) && trim($_POST['footer-qst']) !== '') {
    $mensagem = trim($_POST['footer-qst']);

    // Salva a mensagem na sessão
    $_SESSION['flash_msg'] = $mensagem;

    // Redireciona para a home (sem GET na URL)
    header('Location: ' . URL . 'pages/home.php');
    exit();
} else {
    // Se o campo estiver vazio, redireciona sem nada
    header('Location: ' . URL . 'pages/home.php');
    exit();
}
?>