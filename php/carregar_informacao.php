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

$sql = "SELECT * FROM entidadesqtd WHERE id_entidadesQTD = (SELECT MAX(id_entidadesQTD) FROM entidadesqtd)";

$sql1 = "SELECT * FROM entidadesvalor WHERE id_entidadesValor = (SELECT MAX(id_entidadesValor) FROM entidadesvalor)";

$sql2 = "SELECT * FROM artefatosValor WHERE id_artefatosValor = (SELECT MAX(id_artefatosValor) FROM artefatosValor)";

if ($conn->query($sql) === TRUE) {
    echo "entidadesQTD carregada com sucesso!\n>";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    echo "entidadesValor carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "artefatosValor carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}
$sql3 = "SELECT moeda, mps, clique FROM cliente WHERE id_entidadesQTD = (SELECT MAX(id_entidadesQTD) FROM entidadesqtd) AND id_entidadesValor = (SELECT MAX(id_entidadesValor) FROM entidadesvalor) AND id_artefatosValor = (SELECT MAX(id_artefatosValor) FROM artefatosvalor)";

if ($conn->query($sql3) === TRUE) {
    echo "cliente carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}
$conn->close();


for ($i=1; $i <= 10; $i++) { 
    $entidadesQTD[$i-1] = $sql[$i];
}
for ($i=1; $i <= 10; $i++) { 
    $entidadesValor[$i-1] = $sql1[$i];
}
for ($i=1; $i <= 10; $i++) { 
    $artefatosValor[$i-1] = $sql2[$i];
}
$moeda = $sql2[0];
$mps = $sql2[1];
$clique = $sql2[2];

// Passando as informações para o JavaScript
echo "<script>";
echo "var entidadesQTD = " . json_encode($entidadesQTD) . ";";
echo "var entidadesValor = " . json_encode($entidadesValor) . ";";
echo "var artefatosValor = " . json_encode($artefatosValor) . ";";
echo "var moeda = " . $cliente['moeda'] . ";";
echo "var mps = " . $cliente['mps'] . ";";
echo "var clique = " . $cliente['clique'] . ";";
echo "</script>";
?>