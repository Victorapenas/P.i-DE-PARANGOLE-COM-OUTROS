<?php
// Configurações do banco de dados
$dbHost = 'localhost';      // O endereço do servidor do banco de dados
$dbUsername = 'root';       // O nome de usuário para acessar o banco de dados
$dbPassword = '';           // A senha do usuário para acessar o banco de dados
$dbName = 'srscjf_if';      // O nome do banco de dados que será utilizado

// Cria uma instância do objeto MySQLi para estabelecer a conexão com o banco de dados
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>
