<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Cadastro</title>
</head>
<body>
    <h1>Cadastro Realizado com Sucesso!</h1>
    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        echo "<p>{$_SESSION['mensagem']}</p>";
        unset($_SESSION['mensagem']);
    } else {
        header("Location: index.php"); // Redirecionar se não houver mensagem na sessão
        exit;
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
