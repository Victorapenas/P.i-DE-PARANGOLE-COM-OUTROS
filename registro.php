<?php
// Inclui os arquivos PHP necessários para configuração e funções.
include "config.php";   // Inclui o arquivo com as configurações de conexão ao banco de dados.
include "funcao.php";   // Inclui o arquivo com funções personalizadas.

// Extrai os dados da requisição POST em variáveis separadas.
extract($_POST);

// Verifica se o formulário foi enviado (o botão "cadastrar" foi clicado).
if (isset($cadastrar)) {

    // Remove espaços em branco no início e no fim do nome e sobrenome e depois concatena para formar o nome completo.
    $nomeCompleto = trim($nome) . ' ' . trim($sobrenome);

    // Remove espaços em branco no início e no fim dos demais dados do formulário.
    $matricula = trim($matricula);
    $email = trim($matricula) . '@ifba.edu.br';
    $telefone = trim($telefone);
    $curso = trim($curso);
    $turma = trim($turma);
    $senha = trim($senha);
    $confirmar_senha = trim($confirmar_senha);

    // Verifica se algum dos campos obrigatórios está vazio.
    if (empty($nomeCompleto) || empty($matricula) || empty($email) || empty($telefone) || empty($curso) || empty($turma) || empty($senha) || empty($confirmar_senha)) {
        session_start();
        $_SESSION['cadastro_erro'] = "Todos os campos devem ser preenchidos.";
        header("Location: index.php");
        exit;
    }
    
    // Verifica se a matrícula já existe no banco de dados.
    $consulta = "SELECT COUNT(*) FROM usuarios WHERE matricula = '$matricula'";
    $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);
    $row = $resultado->fetch_row();
    if ($row[0] > 0) {
        session_start();
        $_SESSION['cadastro_erro'] = "A matrícula já está cadastrada.";
        header("Location: index.php");
        exit;
    }
    
    // Verifica se a senha coincide com a confirmação de senha.
    if ($senha === $confirmar_senha) {
        // Gera o hash da senha usando a função password_hash, para armazená-la de forma segura no banco de dados.
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
        // Insere o usuário no banco de dados.
        $consulta = "INSERT INTO `usuarios` (`matricula`, `senha`, `nome`, `email`, `telefone`, `curso`, `turma`) VALUES ('$matricula', '$senhaHash', '$nomeCompleto', '$email', '$telefone', '$curso', '$turma')";
        $resultado = banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta);
    
        // Verifica se a inserção foi bem-sucedida.
        if ($resultado === true) {
            session_start();
            $_SESSION['cadastro_sucesso'] = "Cadastro realizado com sucesso!";
            header("Location: index.php");
            exit;
        } else {
            session_start();
            $_SESSION['cadastro_erro'] = "Ocorreu um erro ao cadastrar o usuário.";
            header("Location: index.php");
            exit;
        }
    } else {
        session_start();
        $_SESSION['cadastro_erro'] = "As senhas não coincidem.";
        header("Location: index.php");
        exit;
    }
}
?>
