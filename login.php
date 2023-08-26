<?php
session_start();

include "config.php";
include "funcao.php";
extract($_POST);

if (isset($login)) {

    $matricula = strval($matricula);
    $senha = strval($senha);

    if (strlen($matricula) == 0) {
        $_SESSION['login_erro'] = "Preencha sua matrícula";
        header("Location: index.php");
        exit;
    } elseif (strlen($senha) == 0) {
        $_SESSION['login_erro'] = "Preencha sua senha";
        header("Location: index.php");
        exit;
    } else {
        $matricula = $mysqli->real_escape_string($matricula);
        
        $consulta = "SELECT * FROM usuarios WHERE matricula = '$matricula'";
        $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);
        
        if ($resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
            $senhaHashh = $usuario['senha'];

            if (password_verify($senha, $senhaHashh)) {
                $_SESSION['matricula'] = $usuario['matricula'];
                $_SESSION['nome'] = $usuario['nome'];
                header("Location: logado.php");
                exit;
            } else {
                $_SESSION['login_erro'] = "Falha ao logar! Matrícula ou senha incorretos";
                header("Location: index.php");
                exit;
            }
        } else {
            $_SESSION['login_erro'] = "Falha ao logar! Matrícula ou senha incorretos";
            header("Location: index.php");
            exit;
        }
    }
}
?>

