<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmicclicker";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados enviados pelo JavaScript
$moeda = $_POST['moeda'];
$mps = $_POST['mps'];
$clique = $_POST['clique'];
$entidadesQTD[] = $_POST['entidadesQTD'];
$entidadesValor[] = $_POST['entidadesValor'];
$artefatosValor[] = $_POST['artefatosValor'];

// Insere os dados no banco de dados
$sql = "INSERT INTO entidadesqtd (qtd1, qtd2, qtd3, qtd4, qtd5, qtd6, qtd7, qtd8, qtd9, qtd10) VALUES ('$entidadesQTD[0]', '$entidadesQTD[1]', '$entidadesQTD[2]', '$entidadesQTD[3]', '$entidadesQTD[4]', '$entidadesQTD[5]', '$entidadesQTD[6]', '$entidadesQTD[7]', '$entidadesQTD[8]','$entidadesQTD[9]')";

$sql1 = "INSERT INTO entidadesvalor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) VALUES ('$entidadesValor[0]', '$entidadesValor[1]', '$entidadesValor[2]', '$entidadesValor[3]', '$entidadesValor[4]', '$entidadesValor[5]', '$entidadesValor[6]', '$entidadesValor[7]', '$entidadesValor[8]','$entidadesValor[9]')";

$sql2 = "INSERT INTO artefatosValor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) VALUES ('$artefatosValor[0]', '$artefatosValor[1]', '$artefatosValor[2]', '$artefatosValor[3]', '$artefatosValor[4]', '$artefatosValor[5]', '$artefatosValor[6]', '$artefatosValor[7]', '$artefatosValor[8]','$artefatosValor[9]')";

if ($conn->query($sql) === TRUE) {
    echo "entidadesQTD salva com sucesso!";
} else {
    echo "Erro ao salvar a informação: " . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    echo "entidadesValor salva com sucesso!";
} else {
    echo "Erro ao salvar a informação: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "artefatosValor salva com sucesso!";
} else {
    echo "Erro ao salvar a informação: " . $conn->error;
}

$sql3 = "INSERT INTO cliente (moeda, mps, clique, id_entidadesQTD, id_entidadesValor, id_artefatosValor) VALUES ('$moeda', '$mps', '$clique', (SELECT MAX(id_entidadesQTD) FROM entidadesqtd), (SELECT MAX(id_entidadesValor) FROM entidadesvalor), (SELECT MAX(id_artefatosValor) FROM artefatosvalor))";

if ($conn->query($sql3) === TRUE) {
    echo "artefatosValor salva com sucesso!";
} else {
    echo "Erro ao salvar a informação: " . $conn->error;
}

$conn->close();
?>