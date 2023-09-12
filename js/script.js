const inputs = document.querySelectorAll("[required]");
inputs.forEach((elemento) => {
    elemento.addEventListener("blur", (evento) => {
        validarCampo(evento.target);
    });
});

function validarCampo(campo) {
    const msnErro = campo.parentNode.querySelector("[data-erro]");
    if (campo.name === "Nome") {
        if (campo.value.lenght < 5) {
            msnErro.textContent = "Digite o nome";

        } else {
            msnErro.textContent = "";
        }
    }
}
function validarCampo(camop) {
    const msnErro = campo.parentNode.querySelector("[data-erro]");
    if (campo.value.lenght < 5) {
        msnErro.textContent = "Filme";
    } else {
        msnErro.textContent = "";
    }
}

/*Email*/
buttonEl = document.getElementById('button');
buttonEl.onclick = function() {
    inputEl = document.getElementById('email').value;
    let gmail = inputEl.indexOf('@gmail');
    let outlook = inputEl.indexOf('@outlook');
    let hotmail = inputEl.indexOf('@hotmail');
    let dotCom = inputEl.endsWith('.com');
    
    if ((gmail != -1 || outlook != -1 || hotmail != -1) && dotCom !=-1) {
        alert('Email válido');
    } else {
        alert('Emailnválido');
    }
}
/*Email*/

/*CPF*/
function validarCPF(cpf) {
    cpf = document.querySelector("#cpf");
    cpf.value = cpf.value.replace(/\.|-/g, "");

    if (cpf.value === "11111111111" ||
        cpf.value === "22222222222" ||
        cpf.value === "33333333333" ||
        cpf.value === "44444444444" ||
        cpf.value === "55555555555" ||
        cpf.value === "66666666666" ||
        cpf.value === "77777777777" ||
        cpf.value === "88888888888" ||
        cpf.value === "99999999999" ||
        cpf.validarCPF === "00000000000") {
        alert("Cpf inválido :(");
    }
    else {
        // primeiro digito
        var soma = 0;
        var peso = 10;

        for (var i = 0; i < 9; i++) {
            soma += cpf.value[i] * peso;
            peso--;
        }

        var digitoUm = soma % 11;

        if (digitoUm < 2) {
            digitoUm = 0;
        } else {
            digitoUm = 11 - digitoUm;
        }

        // segundo digito
        soma = 0;
        peso = 11;

        for (var i = 0; i < 10; i++) {
            soma += cpf.value[i] * peso;
            peso--;
        }

        var digitoDois = soma % 11;

        if (digitoDois < 2) {
            digitoDois = 0;
        } else {
            digitoDois = 11 - digitoDois;
        }

        // Validação do cpf
        if (cpf.value[9] == digitoUm && cpf.value[10] == digitoDois) {
            alert("Cpf válido :)");
            cpf.value = cpf.value.substring(0, 3) + "." + cpf.value.substring(3, 6) + "." + cpf.value.substring(6, 9) + "-" + cpf.value.substring(9, 11);
            document.getElementById('cpf').value = cpf.value;
        } else {
            alert("Cpf inválido :(");
        }
    }
}
/*CPF*/

/*Senha*/
function validarSenhas() {
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmarSenha").value;

    if (senha !== confirmarSenha) {
        document.getElementById("mensagemErro").textContent = "Senhas não compativeis!";
        return false;
    }
    
    return true;
}
/*Senha*/