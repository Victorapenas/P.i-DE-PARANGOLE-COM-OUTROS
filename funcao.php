<?php
function banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta)
{
    // Cria uma instância do objeto MySQLi para estabelecer a conexão com o banco de dados
    $banco = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Verifica se houve algum erro de conexão
    if ($banco->connect_error) {
        echo "Falha de conexão de referência: (" . $banco->connect_errno . ") - " . $banco->connect_error;
        echo "<a href='index.php'>Voltar</a>";
        exit(); // Encerra a execução do script em caso de falha de conexão
    }

    // Executa a consulta no banco de dados
    $resultado = $banco->query($consulta);

    // Verifica se houve algum erro na consulta
    if ($resultado === false) {
        echo "Falha na consulta referência: (" . $banco->errno . ") - " . $banco->error;
        echo "<a href='index.php'>Voltar</a>";
        $banco->close(); // Fecha a conexão com o banco de dados
        return false; // Retorna falso para indicar que a consulta falhou
    }
    
    return $resultado; // Retorna o resultado da consulta bem-sucedida
}
?>
