<?php
include "config.php";
include "funcao.php";
extract($_POST);

if (isset($cadastrar)) {
    $nomeCompleto = trim($nome) . ' ' . trim($sobrenome);
    $matricula = trim($matricula);
    $telefone = trim($telefone);
    $curso = trim($curso);
    $turma = trim($turma);
    $senha = trim($senha);

    if (empty($nomeCompleto) || empty($matricula) || empty($telefone) || empty($curso) || empty($turma) || empty($senha)) {
        echo "<p>Todos os campos devem ser preenchidos.</p>";
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO `usuarios` (`matricula`, `senha`, `nome`,`telefone`, `curso`, `turma`) VALUES ('$matricula', '$senhaHash', '$nomeCompleto', '$telefone', '$curso', '$turma')";
    $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);

    if ($resultado !== false) {
        session_start();
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        header("Location: mensagem.php"); // Redirecionar para uma página de confirmação
        exit;
    } else {
        echo "<p>Não foi possível realizar o cadastro. Erro do banco de dados: " .$resultado. "</p>";
    }
}
?>
