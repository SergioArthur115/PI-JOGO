var moeda = 0;

document.addEventListener("DOMContentLoaded", function () {
    var imagem = document.getElementById("moeda_antiga");
    imagem.addEventListener("click", clickar);
});

function clickar() {
    //console.log("Clique na imagem detectado!");
    moeda = parseInt(moeda + 1);
    document.getElementById("moeda").innerHTML = moeda;
}