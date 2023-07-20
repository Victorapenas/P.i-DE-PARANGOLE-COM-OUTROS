<?php
include "verificar.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Você está logado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .box p {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .box a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4285F4;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .box a:hover {
            background-color: #1A73E8;
        }
    </style>
</head>

<body>
    <div class="box">
        <p>Você está logado! Bem-vindo(a) de volta, <?php echo $_SESSION['nome']; ?>!</p>
        <a href="logout.php">Sair</a>
    </div>
</body>

</html>
