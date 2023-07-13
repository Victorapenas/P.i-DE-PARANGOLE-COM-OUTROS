<?php
function banco($dbHost, $dbUsername, $dbPassword, $dbName, $consulta)
{
    $banco = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($banco->connect_error) {
        echo "Falha de conexão de referência: (" . $banco->connect_errno . ") - " . $banco->connect_error;
        echo "<a href='index.php'>Voltar</a>";
        exit();
    }

    $resultado = $banco->query($consulta);

    if ($resultado === true) {
        $banco->close();
        return true;
    } else {
        echo "Falha na consulta referência: (" . $banco->errno . ") - " . $banco->error;
        echo "<a href='index.php'>Voltar</a>";
        $banco->close();
        return false;
    }
}
