<?php
session_start();
if (isset($_SESSION['cadastro_sucesso'])) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
            var loginBtn = document.getElementById('loginBtn');
            loginBtn.click();
            var certoMessage = document.getElementById('cadastrocerto');
            certoMessage.innerHTML = 'Cadastro realizado com sucesso!';
            certoMessage.style.color = 'green';
            certoMessage.style.fontSize = '20px';
            certoMessage.style.marginTop = '5px';
        });
    </script>";
    unset($_SESSION['cadastro_sucesso']);
} elseif (isset($_SESSION['cadastro_erro'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            var cadastrarBtn = document.getElementById('registerBtn');
            cadastrarBtn.click();
            var errorMessage = document.getElementById('registerErrorMessage');
            errorMessage.innerHTML = 'Erro de cadastro: " . $_SESSION['cadastro_erro'] . "';
            errorMessage.style.color = 'red';
            errorMessage.style.fontSize = '20px';
            errorMessage.style.marginTop = '5px';
        });
      </script>";
    unset($_SESSION['cadastro_erro']);
}

if (isset($_SESSION['login_erro'])) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var loginBtn = document.getElementById('loginBtn');
                loginBtn.click();
                var errorMessage = document.getElementById('loginErrorMessage');
                errorMessage.innerHTML = 'Erro de login: " . $_SESSION['login_erro'] . "';
                errorMessage.style.color = 'red';
                errorMessage.style.fontSize = '20px';
                errorMessage.style.marginTop = '5px';
            });
          </script>";
    unset($_SESSION['login_erro']);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>SRSCJF-IF</title>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>LOGO .</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="#" class="link active">Inicio</a></li>
                    <li><a href="sobre.html" class="link">Sobre</a></li>
                    <li><a href="#" class="link">Não definido</a></li>
                    <li><a href="#" class="link">Suporte</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Login
                </button>
                <button class="btn" id="registerBtn" onclick="cadastro()">Cadastre-se</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="menuFunction()"></i>
            </div>
        </nav>

        <!-- Form box -->
        <div class="form-box">

            <!-- login form -->
            <div class="login-container" id="login">
                <div class="top">
                    <span>Não tem uma conta? <a href="#" onclick="cadastro()">Cadastre-se</a></span>
                    <header>Login</header>
                    <center><div id="loginErrorMessage" class="error-message"></div></center>
                    <center><div id="cadastrocerto" class="certo-message"></div></center>
                </div>

                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Matrícula" name="matricula" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Senha" name="senha" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Login" name="login">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Relembre-me</label>
                        </div>

                        <div class="two">
                            <label><a href="#">Esqueceu a senha?</a></label>
                        </div>
                    </div>
                </form>    
            </div>

            <!-- Formulario de cadastro -->
            <div class="register-container elemento-com-barra-de-rolagem" id="register">
                <div class="top">
                    <span>Já tem uma conta? <a href="#" onclick="login()">Login</a></span>
                    <header>Cadastre-se</header>
                    <center><div id="registerErrorMessage" class="error-message"></div></center>
                </div>
                <form action="registro.php" method="POST">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Nome" name="nome" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Sobrenome" name="sobrenome" required>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Matrícula" name="matricula" pattern="[0-9]{12}" title="Digite uma matrícula com 12 dígitos" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Telefone" name="telefone" data-mask="(00) 00000-0000" required>
                        <i class="bx bx-phone"></i>
                    </div>
                    <div class="input-box">
                        <select id="curso" class="input-field" onchange="updateTurmaOptions()" name="curso" required>
                            <option value="" selected disabled>Curso</option>
                            <option value="meio_ambiente">Meio Ambiente</option>
                            <option value="edificacoes">Edificações</option>
                            <option value="informatica">Informática</option>
                        </select>
                        <i class="bx bxs-school"></i>
                    </div>
                    <div class="input-box">
                        <select id="turma" class="input-field" name="turma" required>
                            <option value="" selected disabled>Turma</option>
                        </select>
                        <i class="bx bxs-group"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Senha" name="senha" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Confirmar Senha" name="confirmar_senha" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Cadastre-se" name="cadastrar">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check"> Relembre-me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Termos & condições</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <script src="script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    </div>
</body>

</html>
