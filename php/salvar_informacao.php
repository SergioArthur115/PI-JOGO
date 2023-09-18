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
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
  // Receives the data sent by JavaScript
  $data = json_decode(file_get_contents('php://input'), true);

  // Access the data using the correct keys
  $moeda = isset($data['moeda']) ? $data['moeda'] : '';
  $mps = isset($data['mps']) ? $data['mps'] : '';
  $clique = isset($data['clique']) ? $data['clique'] : '';
  $entidadesQTD = isset($data['entidadesQTD']) ? $data['entidadesQTD'] : '';
  $entidadesValor = isset($data['entidadesValor']) ? $data['entidadesValor'] : '';
  $artefatosValor = isset($data['artefatosValor']) ? $data['artefatosValor'] : '';
  $estado = isset($data['estado']) ? $data['estado'] : '';
}

/*
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
  //Receive the RAW post data.
  $content = trim(file_get_contents("php://input"));

  $decoded = json_decode($content, true);

  //If json_decode failed, the JSON is invalid.
  if(! is_array($decoded)) {

  } else {
    // Send error back to user.
  }
}
*/


if ($estado == false) {
    // Insere os dados no banco de dados
    $sql = "INSERT INTO entidadesqtd (qtd1, qtd2, qtd3, qtd4, qtd5, qtd6, qtd7, qtd8, qtd9, qtd10) VALUES
 ('$entidadesQTD[0]', '$entidadesQTD[1]', '$entidadesQTD[2]', '$entidadesQTD[3]', '$entidadesQTD[4]', '$entidadesQTD[5]', '$entidadesQTD[6]', '$entidadesQTD[7]', '$entidadesQTD[8]','$entidadesQTD[9]')";

    $sql1 = "INSERT INTO entidadesvalor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) 
VALUES ('$entidadesValor[0]', '$entidadesValor[1]', '$entidadesValor[2]', '$entidadesValor[3]', '$entidadesValor[4]', '$entidadesValor[5]', '$entidadesValor[6]', '$entidadesValor[7]', '$entidadesValor[8]','$entidadesValor[9]')";

    $sql2 = "INSERT INTO artefatosValor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) 
VALUES ('$artefatosValor[0]', '$artefatosValor[1]', '$artefatosValor[2]', '$artefatosValor[3]', '$artefatosValor[4]', '$artefatosValor[5]', '$artefatosValor[6]', '$artefatosValor[7]', '$artefatosValor[8]','$artefatosValor[9]')";

    if ($conn->query($sql) === TRUE) {
        echo "entidadesQTD salva com sucesso!\n>";
    } else {
        echo "Erro ao salvar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql1) === TRUE) {
        echo "entidadesValor salva com sucesso!\n";
    } else {
        echo "Erro ao salvar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql2) === TRUE) {
        echo "artefatosValor salva com sucesso!\n";
    } else {
        echo "Erro ao salvar a informação: \n" . $conn->error;
    }
    $sql3 = "INSERT INTO cliente (moeda, mps, clique, id_entidadesQTD, id_entidadesValor, id_artefatosValor) VALUES ('$moeda', '$mps', '$clique', (SELECT MAX(id_entidadesQTD) FROM entidadesqtd), (SELECT MAX(id_entidadesValor) FROM entidadesvalor), (SELECT MAX(id_artefatosValor) FROM artefatosvalor))";

    if ($conn->query($sql3) === TRUE) {
        echo "cliente salva com sucesso!\n";
    } else {
        echo "Erro ao salvar a informação: \n" . $conn->error;
    }
    $conn->close();
}

if ($estado == TRUE) {
    // Insere os dados no banco de dados
    $sql = "UPDATE entidadesqtd SET qtd1 = '$entidadesQTD[0]', qtd2 = '$entidadesQTD[1]', qtd3 = '$entidadesQTD[2]', qtd4 = '$entidadesQTD[3]', qtd5 = '$entidadesQTD[4]', qtd6 = '$entidadesQTD[5]', qtd7 = '$entidadesQTD[6]', qtd8 = '$entidadesQTD[7]', qtd9 = '$entidadesQTD[8]', qtd10 = '$entidadesQTD[9]' WHERE id_entidadesqtd = (SELECT MAX(id_entidadesqtd) FROM entidadesqtd)";


    $sql1 = "UPDATE entidadesvalor SET valor1 = '$entidadesQTD[0]', valor2 = '$entidadesQTD[1]', valor3 = '$entidadesQTD[2]', valor4 = '$entidadesQTD[3]', valor5 = '$entidadesQTD[4]', valor6 = '$entidadesQTD[5]', valor7 = '$entidadesQTD[6]', valor8 = '$entidadesQTD[7]', valor9 = '$entidadesQTD[8]', valor10 = '$entidadesQTD[9]' WHERE id_entidadesvalor = (SELECT MAX(id_entidadesvalor) FROM entidadesvalor)";

    $sql2 = "UPDATE artefatosvalor SET valor1 = '$artefatosValor[0]', valor2 = '$artefatosValor[1]', valor3 = '$artefatosValor[2]', valor4 = '$artefatosValor[3]', valor5 = '$artefatosValor[4]', valor6 = '$artefatosValor[5]', valor7 = '$artefatosValor[6]', valor8 = '$artefatosValor[7]', valor9 = '$artefatosValor[8]', valor10 = '$artefatosValor[9]' WHERE id_artefatosvalor = (SELECT MAX(id_artefatosvalor) FROM artefatosvalor)";

    if ($conn->query($sql) === TRUE) {
        echo "entidadesQTD autalizada com sucesso!\n";
    } else {
        echo "Erro ao autalizar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql1) === TRUE) {
        echo "entidadesValor autalizada com sucesso!\n";
    } else {
        echo "Erro ao autalizar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql2) === TRUE) {
        echo "artefatosValor autalizada com sucesso!\n";
    } else {
        echo "Erro ao autalizar a informação: \n" . $conn->error;
    }

    $sql3 = "UPDATE cliente SET moeda = '$moeda', mps = '$mps', clique = '$clique', id_entidadesQTD = '$id_entidadesQTD', id_entidadesValor = '$id_entidadesValor', id_artefatosValor = '$id_artefatosValor', WHERE id_entidadesqtd = (SELECT MAX(id_entidadesqtd) FROM entidadesqtd),id_entidadesvalor = (SELECT MAX(id_entidadesvalor) FROM entidadesvalor),id_artefatosvalor = (SELECT MAX(id_artefatosvalor) FROM artefatosvalor)";

    if ($conn->query($sql3) === TRUE) {
        echo "cliente autalizada com sucesso!\n";
    } else {
        echo "Erro ao autalizar a informação: \n" . $conn->error;
    }
    $conn->close();
}
?>