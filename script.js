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
