<?php
include 'config.php'; // Só se necessário para pegar a URL base

echo 'aaaaaaaaaaaaaaaaaa';

if (isset($_POST['footer-qst'])) {
    $mensagem = $_POST['footer-qst'];
    header('Location: ' . URL . 'pages/home.php?msg=' . $mensagem);
    exit();
} else {
    header('Location: ' . URL . 'pages/home.php#footer-qst');
    exit();
}
?>