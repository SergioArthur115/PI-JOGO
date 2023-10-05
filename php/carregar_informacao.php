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

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $entidadesQTD = $row['entidadesqtd'];
    echo "entidadesQTD carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}

$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $entidadesValor = $row['entidadesvalor'];
    echo "entidadesValor carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}

$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $artefatosValor = $row['artefatosvalor'];
    echo "artefatosValor carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}

$sql3 = "SELECT moeda, mps, clique FROM cliente WHERE id_entidadesQTD = (SELECT MAX(id_entidadesQTD) FROM entidadesqtd) AND id_entidadesValor = (SELECT MAX(id_entidadesValor) FROM entidadesvalor) AND id_artefatosValor = (SELECT MAX(id_artefatosValor) FROM artefatosvalor)";

$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $entidadesQTD = $row['cliente'];
    echo "cliente carregada com sucesso!\n";
} else {
    echo "Erro ao carregar a informação: \n" . $conn->error;
}
$conn->close();


for ($i = 1; $i <= 50; $i++) {
    $entidadesQTD[$i - 1] = $sql[$i];
}
for ($i = 1; $i <= 50; $i++) {
    $entidadesValor[$i - 1] = $sql1[$i];
}
for ($i = 1; $i <= 50; $i++) {
    $artefatosValor[$i - 1] = $sql2[$i];
}
$moeda = $sql2[0];
$mps = $sql2[1];
$clique = $sql2[2];

// Passando as informações para o JavaScript
$data = array(
    'moeda' => $moeda,
    'mps' => $mps,
    'clique' => $clique,
    'entidadesQTD' =>json_encode($entidadesQTD),
    'entidadesValor' => json_encode($entidadesValor),
    'artefatosValor' => json_encode($artefatosValor)
);
// Retorna os valores em formato JSON
header('Content-Type: application/json');
echo json_encode($data);
?>