<?php
session_start(); // Inicia a sessão para armazenar informações do usuário durante a navegação.

include "config.php"; // Inclui um arquivo que contém informações de configuração do banco de dados.
include "funcao.php"; // Inclui um arquivo que contém algumas funções auxiliares utilizadas no código.
extract($_POST); // Extrai os dados enviados via método POST para variáveis com os mesmos nomes dos campos do formulário.

if (isset($login)) { // Verifica se o botão de login foi pressionado (assumindo que há um campo com name="login" no formulário).

    $matricula = strval($matricula); // Converte a matrícula para uma string.
    $senha = strval($senha); // Converte a senha para uma string.

    if (strlen($matricula) == 0) { // Verifica se o campo de matrícula está vazio.
        $_SESSION['login_erro'] = "Preencha sua matrícula"; // Armazena uma mensagem de erro na sessão.
        header("Location: index.php"); // Redireciona o usuário de volta para a página de login.
        exit; // Encerra a execução do script.
    } elseif (strlen($senha) == 0) { // Verifica se o campo de senha está vazio.
        $_SESSION['login_erro'] = "Preencha sua senha"; // Armazena uma mensagem de erro na sessão.
        header("Location: index.php"); // Redireciona o usuário de volta para a página de login.
        exit; // Encerra a execução do script.
    } else {
        $matricula = $mysqli->real_escape_string($matricula); // Escapa a matrícula para evitar ataques de injeção de SQL.
        
        // Busca o usuário no banco de dados com base na matrícula fornecida.
        $consulta = "SELECT * FROM usuarios WHERE matricula = '$matricula'";
        $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);
        
        if ($resultado->num_rows == 1) { // Verifica se foi encontrado exatamente um resultado na consulta.
            $usuario = $resultado->fetch_assoc(); // Extrai os dados do usuário do resultado da consulta.
            $senhaHashh = $usuario['senha']; // Obtém o hash da senha armazenado no banco de dados.

            // Verifica se a senha fornecida corresponde ao hash armazenado.
            if (password_verify($senha, $senhaHashh)) {
                $_SESSION['matricula'] = $usuario['matricula']; // Armazena a matrícula do usuário na sessão.
                $_SESSION['nome'] = $usuario['nome']; // Armazena o nome do usuário na sessão.
                header("Location: logado.php"); // Redireciona o usuário para a página de login bem-sucedido.
                exit; // Encerra a execução do script.
            } else {
                $_SESSION['login_erro'] = "Falha ao logar! Matrícula ou senha incorretos"; // Armazena uma mensagem de erro na sessão.
                header("Location: index.php"); // Redireciona o usuário de volta para a página de login.
                exit; // Encerra a execução do script.
            }
        } else {
            $_SESSION['login_erro'] = "Falha ao logar! Matrícula ou senha incorretos"; // Armazena uma mensagem de erro na sessão.
            header("Location: index.php"); // Redireciona o usuário de volta para a página de login.
            exit; // Encerra a execução do script.
        }
    }
}
?>
