# P.i-DE-PARANGOLE-COM-OUTROS
TURMA EI-31

Relatorio: 
Boa tarde, bom dia e boa noite, ai ai ai começar esse projetinho do PI.

Primeiro buscamos uma base visualmente bonita é funcional, achamos um video no YouTube é decidimos organizar o nosso PI através da base do site ensinada pelo video.

Link do video: https://youtu.be/zi3tKRp0fIY

Lets bora explicar o que cada parte do código faz, primeiro vamos fazer essa parte visual para agradar o público e tal.

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contente="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SRSCJF-IF</title>
</head>
<body>
    
</body>
</html>

Esse é o nosso início meio triste, mas é isso.

Iniciamos montando uma base de código para fazer as demais importações, já lincamos também ao css e decidimos colocar uma compatibilidade a internet explore nunca se sabe de onde será acessado é as maquinas do ifba usa como navegador padrão.

O código ensinado faz bastante uso do nav. Uma breve explicação do que é: O Elemento HTML de Navegação ( <nav> ) representa uma seção de uma página que aponta para outras páginas ou para outras áreas da página, ou seja, uma seção com links de navegação.

Bom então no body (parte que vai ficar visível no código obvio né) trabalharemos assim, invés de ir para outra página com links vamos usar a mesma pagina apenas ocorrendo transição, onde o usuário pode ir ao sobre, suporte, contato e outros sem sair da página inicial. Essa é uma base, esta com lista é com links, mas futuramente vamos tirar: 

<body>
    <nav class="nav">
        <div class="nav-logo">
            <p>SRSCJF-IF</p>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="#" class="link">Inicio</a></li>
                <li><a href="#" class="link">Sobre</a></li>
                <li><a href="#" class="link">Não definido</a></li>
                <li><a href="#" class="link">Suporte</a></li>
            </ul>
        </div>
    </nav> 

Então agora é necessário criar os botões de login e de cadastro, vale ressaltar que eles irão ficar na parte superior à direita. 

        <div class="nav-button">
            <button class="btn" id="loginBtn">Login</button>
            <button class="btn" id="registroBtn">Cadastre-se</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="menuFunction()"></i>
        </div>

Breve explicação sobre p "i" usado: A tag <i> pode representar uma parte do texto com uma diferença semântica, na qual a representação tipográfica padrão é no tipo itálico. Isso significa que os navegadores continuarão a apresentar o conteúdo em itálico, mas, conforme o definido, isso não é mais requerido.

onclick executa determinada funcionalidade quando um botão é clicado. Nesse caso ele realiza nossa função de transição de página.

Bom por hoje é só.

Código por enquanto:

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contente="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SRSCJF-IF</title>
</head>
<body>
    <nav class="nav">
        <div class="nav-logo">
            <p>SRSCJF-IF</p>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="#" class="link active">Inicio</a></li>
                <li><a href="#" class="link">Sobre</a></li>
                <li><a href="#" class="link">Não definido</a></li>
                <li><a href="#" class="link">Suporte</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn" id="loginBtn">Login</button>
            <button class="btn" id="registroBtn">Cadastre-se</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="menuFunction()"></i>
        </div>
    </nav>
</body>
</html>

29/06/2023
Victor Hugo 
