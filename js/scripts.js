function salvarInfo() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/salvar_informacao.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // Dados que você deseja enviar

    entidadesQTD = [
        document.getElementById('qtd1').innerHTML,
        document.getElementById('qtd2').innerHTML,
        document.getElementById('qtd3').innerHTML,
        document.getElementById('qtd4').innerHTML,
        document.getElementById('qtd5').innerHTML,
        document.getElementById('qtd6').innerHTML,
        document.getElementById('qtd7').innerHTML,
        document.getElementById('qtd8').innerHTML,
        document.getElementById('qtd9').innerHTML,
        document.getElementById('qtd10').innerHTML,
    ]

    entidadesValor = [
        document.getElementById('valorCompra1').innerHTML,
        document.getElementById('valorCompra2').innerHTML,
        document.getElementById('valorCompra3').innerHTML,
        document.getElementById('valorCompra4').innerHTML,
        document.getElementById('valorCompra5').innerHTML,
        document.getElementById('valorCompra6').innerHTML,
        document.getElementById('valorCompra7').innerHTML,
        document.getElementById('valorCompra8').innerHTML,
        document.getElementById('valorCompra9').innerHTML,
        document.getElementById('valorCompra10').innerHTML,
    ]
    artefatosValor = [
        document.getElementById('valorCompra11').innerHTML,
        document.getElementById('valorCompra22').innerHTML,
        document.getElementById('valorCompra33').innerHTML,
        document.getElementById('valorCompra44').innerHTML,
        document.getElementById('valorCompra55').innerHTML,
        document.getElementById('valorCompra66').innerHTML,
        document.getElementById('valorCompra77').innerHTML,
        document.getElementById('valorCompra88').innerHTML,
        document.getElementById('valorCompra99').innerHTML,
        document.getElementById('valorCompra1010').innerHTML,
    ]

    var dados = "moeda=" + moeda +
        "&mps=" + mps +
        "&clique=" + clique +
        "&entidadesQTD=" + JSON.stringify(entidadesQTD) +
        "&entidadesValor=" + JSON.stringify(entidadesValor) +
        "&artefatosValor=" + JSON.stringify(artefatosValor);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // A resposta do servidor está pronta
            console.log(xhr.responseText);
        }
    };

    xhr.send(dados);
}
function carregarInfo() {
    moeda = parseFloat(document.getElementById("moeda").innerHTML);
    mps =parseFloat(document.getElementById("mps").innerHTML);
    clique = parseInt(1);
    entidadesQTD = [
        document.getElementById('qtd1').innerHTML,
        document.getElementById('qtd2').innerHTML,
        document.getElementById('qtd3').innerHTML,
        document.getElementById('qtd4').innerHTML,
        document.getElementById('qtd5').innerHTML,
        document.getElementById('qtd6').innerHTML,
        document.getElementById('qtd7').innerHTML,
        document.getElementById('qtd8').innerHTML,
        document.getElementById('qtd9').innerHTML,
        document.getElementById('qtd10').innerHTML,
    ]

    entidadesValor = [
        document.getElementById('valorCompra1').innerHTML,
        document.getElementById('valorCompra2').innerHTML,
        document.getElementById('valorCompra3').innerHTML,
        document.getElementById('valorCompra4').innerHTML,
        document.getElementById('valorCompra5').innerHTML,
        document.getElementById('valorCompra6').innerHTML,
        document.getElementById('valorCompra7').innerHTML,
        document.getElementById('valorCompra8').innerHTML,
        document.getElementById('valorCompra9').innerHTML,
        document.getElementById('valorCompra10').innerHTML,
    ]
    artefatosValor = [
        document.getElementById('valorCompra11').innerHTML,
        document.getElementById('valorCompra22').innerHTML,
        document.getElementById('valorCompra33').innerHTML,
        document.getElementById('valorCompra44').innerHTML,
        document.getElementById('valorCompra55').innerHTML,
        document.getElementById('valorCompra66').innerHTML,
        document.getElementById('valorCompra77').innerHTML,
        document.getElementById('valorCompra88').innerHTML,
        document.getElementById('valorCompra99').innerHTML,
        document.getElementById('valorCompra1010').innerHTML,
    ]
    console.log(moeda);
    console.log(mps);
    console.log(clique);
    console.log(entidadesQTD);
    console.log(entidadesValor);
    console.log(artefatosValor);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // A resposta foi recebida com sucesso
                data = (xhr.responseText);
                moeda = parseFloat(data.moeda);
                mps = parseFloat(data.mps);
                clique = parseInt(data.clique);
                entidadesQTD = (data.entidadesQTD);
                entidadesValor = (data.entidadesValor);
                artefatosValor = (data.artefatosValor);
            } else {
                // Ocorreu um erro na requisição
                console.error("Erro na requisição: " + xhr.status);
            }
        }
    };

    xhr.open("GET", "./php/carregar_informacao.php", true);
    xhr.send();
    console.log(moeda);
    console.log(mps);
    console.log(clique);
    console.log(entidadesQTD);
    console.log(entidadesValor);
    console.log(artefatosValor);
}
setInterval(atualizarValorMoeda, 1000);
setInterval(salvarInfo, 10000);


function atualizarValorMoeda() {
    moeda += parseFloat(mps);
    document.getElementById("moeda").innerHTML = parseFloat(moeda.toFixed(2));
    document.getElementById("mps").innerHTML = parseFloat(mps.toFixed(2));
}

document.addEventListener("DOMContentLoaded", function () {
    var imagem = document.getElementById("moeda_antiga");
    imagem.addEventListener("click", clickar);
    carregarInfo();
    if (clique == 1) { salvarInfo(); }

});


function clickar() {
    //console.log("Clique na imagem detectado!");
    moeda = parseFloat(moeda + clique);
    document.getElementById("moeda").innerHTML = parseFloat(moeda.toFixed(2));
}

function atualizarEntidade(id) {
    if (id == "valorCompra1") {
        document.getElementById('divEntidade2').style.display = "flex";
    } else if (id == "valorCompra2") {
        document.getElementById('divEntidade3').style.display = "flex";
    } else if (id == "valorCompra3") {
        document.getElementById('divEntidade4').style.display = "flex";
    } else if (id == "valorCompra4") {
        document.getElementById('divEntidade5').style.display = "flex";
    } else if (id == "valorCompra5") {
        document.getElementById('divEntidade6').style.display = "flex";
    } else if (id == "valorCompra6") {
        document.getElementById('divEntidade7').style.display = "flex";
    } else if (id == "valorCompra7") {
        document.getElementById('divEntidade8').style.display = "flex";
    } else if (id == "valorCompra8") {
        document.getElementById('divEntidade9').style.display = "flex";
    } else if (id == "valorCompra8") {
        document.getElementById('divEntidade10').style.display = "flex";
    }
    if (id == "valorCompra11") {
        document.getElementById('divArtefato2').style.display = "flex";
    } else if (id == "valorCompra22") {
        document.getElementById('divArtefato3').style.display = "flex";
    } else if (id == "valorCompra33") {
        document.getElementById('divArtefato4').style.display = "flex";
    } else if (id == "valorCompra44") {
        document.getElementById('divArtefato5').style.display = "flex";
    } else if (id == "valorCompra55") {
        document.getElementById('divArtefato6').style.display = "flex";
    } else if (id == "valorCompra66") {
        document.getElementById('divArtefato7').style.display = "flex";
    } else if (id == "valorCompra77") {
        document.getElementById('divArtefato8').style.display = "flex";
    } else if (id == "valorCompra88") {
        document.getElementById('divArtefato9').style.display = "flex";
    } else if (id == "valorCompra99") {
        document.getElementById('divArtefato10').style.display = "flex";
    }
}

function atualizarMPS(id) {
    if (id == "valorCompra1") {
        mps += parseFloat(0.1);
        document.getElementById("qtd1").innerHTML = parseInt(document.getElementById("qtd1").innerHTML) + 1;
        entidadesQTD[0] = parseInt(document.getElementById("qtd1").innerHTML)
    } else if (id == "valorCompra2") {
        mps += parseFloat(1);
        document.getElementById("qtd2").innerHTML = parseInt(document.getElementById("qtd2").innerHTML) + 1;
        entidadesQTD[1] = parseInt(document.getElementById("qtd2").innerHTML)
    } else if (id == "valorCompra3") {
        mps += parseFloat(10);
        document.getElementById("qtd3").innerHTML = parseInt(document.getElementById("qtd3").innerHTML) + 1;
        entidadesQTD[2] = parseInt(document.getElementById("qtd3").innerHTML)
    } else if (id == "valorCompra4") {
        mps += parseFloat(100);
        document.getElementById("qtd4").innerHTML = parseInt(document.getElementById("qtd4").innerHTML) + 1;
        entidadesQTD[3] = parseInt(document.getElementById("qtd4").innerHTML)
    } else if (id == "valorCompra5") {
        mps += parseFloat(1000);
        document.getElementById("qtd5").innerHTML = parseInt(document.getElementById("qtd5").innerHTML) + 1;
        entidadesQTD[4] = parseInt(document.getElementById("qtd5").innerHTML)
    } else if (id == "valorCompra6") {
        mps += parseFloat(10000);
        document.getElementById("qtd6").innerHTML = parseInt(document.getElementById("qtd6").innerHTML) + 1;
        entidadesQTD[5] = parseInt(document.getElementById("qtd6").innerHTML)
    } else if (id == "valorCompra7") {
        mps += parseFloat(100000);
        document.getElementById("qtd7").innerHTML = parseInt(document.getElementById("qtd7").innerHTML) + 1;
        entidadesQTD[6] = parseInt(document.getElementById("qtd7").innerHTML)
    } else if (id == "valorCompra8") {
        mps += parseFloat(1000000);
        document.getElementById("qtd8").innerHTML = parseInt(document.getElementById("qtd8").innerHTML) + 1;
        entidadesQTD[7] = parseInt(document.getElementById("qtd8").innerHTML)
    } else if (id == "valorCompra9") {
        mps += parseFloat(10000000);
        document.getElementById("qtd9").innerHTML = parseInt(document.getElementById("qtd9").innerHTML) + 1;
        entidadesQTD[8] = parseInt(document.getElementById("qtd9").innerHTML)
    } else if (id == "valorCompra10") {
        mps += parseFloat(100000000);
        document.getElementById("qtd10").innerHTML = parseInt(document.getElementById("qtd10").innerHTML) + 1;
        entidadesQTD[9] = parseInt(document.getElementById("qtd10").innerHTML)
    }
    document.getElementById("mps").innerHTML = parseFloat(mps.toFixed(2));
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
        atualizarEntidade(id);
    }
}

function atualizarArtefato(id) {
    var elementoValor = document.getElementById(id);
    var valorAtual = parseFloat(elementoValor.innerText);
    if (valorAtual <= moeda) {
        //console.log("entrou!");

        atualizarEntidade(id);
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

//Página missoes----------------------------------------------------------------

function concluirMissao(id) {
    var elementoValor = document.getElementById(id);
    var valorAtual = parseFloat(elementoValor.innerText);
    if (id == "missao1" && !(elementoValor.innerText == "Concluido")) {
        mps += 100
        elementoValor.innerText = "Concluido";
    } else if (id == "missao2" && !(elementoValor.innerText == "Concluido")) {
        mps += 1000
        elementoValor.innerText = "Concluido";
    } else if (id == "missao3" && !(elementoValor.innerText == "Concluido")) {
        mps += 10000
        elementoValor.innerText = "Concluido";
    }
}