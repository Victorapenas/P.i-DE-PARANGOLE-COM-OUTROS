<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['matricula'])) {
    $_SESSION['login_erro'] = "Você não pode acessar esta página porque não está logado.";
    header("Location: index.php");
    exit;
}
?>
