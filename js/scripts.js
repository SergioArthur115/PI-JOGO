var moeda = 0;
var mps = 0;
var clique = 1;
setInterval(atualizarValorMoeda, 1000);

document.addEventListener("DOMContentLoaded", function () {
    var imagem = document.getElementById("moeda_antiga");
    imagem.addEventListener("click", clickar);
});

function clickar() {
    //console.log("Clique na imagem detectado!");
    moeda = parseFloat(moeda + clique);
    document.getElementById("moeda").innerHTML = moeda.toFixed(2);
}

function atualizarValorMoeda() {
    moeda += mps;
    document.getElementById("moeda").innerHTML = moeda.toFixed(2);
}

function atualizarEntidade(id) {
    if (id == "divEntidade1") {
        document.getElementById('divEntidade2').style.visibility = "visible";
    } else if (id == "divEntidade2") {
        document.getElementById('divEntidade3').style.visibility = "visible";
    } else if (id == "divEntidade3") {
        document.getElementById('divEntidade4').style.visibility = "visible";
    } else if (id == "divEntidade4") {
        document.getElementById('divEntidade5').style.visibility = "visible";
    } else if (id == "divEntidade5") {
        document.getElementById('divEntidade6').style.visibility = "visible";
    } else if (id == "divEntidade6") {
        document.getElementById('divEntidade7').style.visibility = "visible";
    } else if (id == "divEntidade7") {
        document.getElementById('divEntidade8').style.visibility = "visible";
    } else if (id == "divEntidade8") {
        document.getElementById('divEntidade9').style.visibility = "visible";
    } else if (id == "divEntidade9") {
        document.getElementById('divEntidade10').style.visibility = "visible";
    }
    if (id == "divArtefato1") {
        document.getElementById('divArtefato2').style.visibility = "visible";
    } else if (id == "divArtefato2") {
        document.getElementById('divArtefato3').style.visibility = "visible";
    } else if (id == "divArtefato3") {
        document.getElementById('divArtefato4').style.visibility = "visible";
    } else if (id == "divArtefato4") {
        document.getElementById('divArtefato5').style.visibility = "visible";
    } else if (id == "divArtefato5") {
        document.getElementById('divArtefato6').style.visibility = "visible";
    } else if (id == "divArtefato6") {
        document.getElementById('divArtefato7').style.visibility = "visible";
    } else if (id == "divArtefato7") {
        document.getElementById('divArtefato8').style.visibility = "visible";
    } else if (id == "divArtefato8") {
        document.getElementById('divArtefato9').style.visibility = "visible";
    } else if (id == "divArtefato9") {
        document.getElementById('divArtefato10').style.visibility = "visible";
    }
}

function atualizarMPS(id) {
    if (id == "valorCompra1") {
        mps += 0.1;
    } else if (id == "valorCompra2") {
        mps += 1;
    } else if (id == "valorCompra3") {
        mps += 10;
    } else if (id == "valorCompra4") {
        mps += 100;
    } else if (id == "valorCompra5") {
        mps += 1000;
    } else if (id == "valorCompra6") {
        mps += 10000;
    } else if (id == "valorCompra7") {
        mps += 100000;
    } else if (id == "valorCompra8") {
        mps += 1000000;
    } else if (id == "valorCompra9") {
        mps += 10000000;
    } else if (id == "valorCompra10") {
        mps += 100000000;
    }
    document.getElementById("mps").innerHTML = mps.toFixed(2);
}

function atualizarValorCompra(id) {
    var elementoValor = document.getElementById(id);
    var valorAtual = parseFloat(elementoValor.innerText);
    if (valorAtual <= moeda) {
        //console.log("entrou!");
        var novoValor = valorAtual * 1.1;
        elementoValor.innerText = novoValor.toFixed(2);
        moeda -= valorAtual;
        atualizarMPS(id);
    }
}

function atualizarArtefato(id) {
    var elementoValor = document.getElementById(id);
    var valorAtual = parseFloat(elementoValor.innerText);
    if (valorAtual <= moeda) {
        //console.log("entrou!");


        if (id == "valorCompra11" && !(elementoValor.innerText == "Comprado")) {
            clique += 1;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra22" && !(elementoValor.innerText == "Comprado")) {
            clique += 10;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra33" && !(elementoValor.innerText == "Comprado")) {
            clique += 100;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra44" && !(elementoValor.innerText == "Comprado")) {
            clique += 1000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra55" && !(elementoValor.innerText == "Comprado")) {
            clique += 10000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra66" && !(elementoValor.innerText == "Comprado")) {
            clique += 100000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra77" && !(elementoValor.innerText == "Comprado")) {
            clique += 1000000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra88" && !(elementoValor.innerText == "Comprado")) {
            clique += 10000000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra99" && !(elementoValor.innerText == "Comprado")) {
            clique += 100000000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        } else if (id == "valorCompra1010" && !(elementoValor.innerText == "Comprado")) {
            clique += 1000000000;
            elementoValor.innerText = "Comprado";
            moeda -= valorAtual;
        }
    }
}