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
            <button class="btn white-btn" id="loginBtn" onclick="login()">Login</button>
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
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Matrícula" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Senha" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Login">
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
        </div>

        <!-- Formulario de cadastro -->
        <div class="register-container elemento-com-barra-de-rolagem" id="register">
            <div class="top">
                <span>Já tem uma conta? <a href="#" onclick="login()">Login</a></span>
                <header>Cadastre-se</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Nome" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Sobrenome" required>
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Matrícula" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Telefone" required>
                <i class="bx bx-phone"></i>
            </div>
            <div class="input-box">
                <select id="curso" class="input-field" onchange="updateTurmaOptions()" required>
                    <option value="" selected disabled>Curso</option>
                    <option value="meio_ambiente">Meio Ambiente</option>
                    <option value="edificacoes">Edificações</option>
                    <option value="informatica">Informática</option>
                </select>
                <i class="bx bxs-school"></i>
            </div>
            <div class="input-box">
                <select id="turma" class="input-field" required>
                    <option value="" selected disabled>Turma</option>
                </select>
                <i class="bx bxs-group"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Senha" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Cadastre-se">
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
        </div>
    </div>

    <script>
        function menuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }

        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
            x.classList.remove("form-inactive");
        }

        function cadastro() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
            x.classList.add("form-inactive");
        }

        function updateTurmaOptions() {
            var cursoSelect = document.getElementById("curso");
            var turmaSelect = document.getElementById("turma");
            var selectedCurso = cursoSelect.value;
            turmaSelect.innerHTML = "";

            if (selectedCurso === "edificacoes") {
                var turmas = ["ED-11", "ED-12", "ED-21", "ED-22", "ED-31", "ED-32", "ED-41"];
            } else if (selectedCurso === "informatica") {
                var turmas = ["EI-11", "EI-12", "EI-21", "EI-22", "EI-31", "EI-32", "EI-41"];
            } else if (selectedCurso === "meio_ambiente") {
                var turmas = ["EMA-11", "EMA-12", "EMA-21", "EMA-22", "EMA-31", "EMA-32", "EMA-41"];
            }

            for (var i = 0; i < turmas.length; i++) {
                var option = document.createElement("option");
                option.value = turmas[i];
                option.text = turmas[i];
                turmaSelect.appendChild(option);
            }
        }
    </script>
</body>
</html>


!!!                                            TESTE                                                        !!!

https://github.com/Victorapenas/P.i-DE-PARANGOLE-COM-OUTROS/assets/136385594/04425d32-f8e4-41ad-b111-f561d441b687
