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

$moeda = $_POST['moeda'];
$mps = $_POST['mps'];
$clique = $_POST['clique'];
$entidadesQTD = $_POST['entidadesQTD'];
$entidadesValor = $_POST['entidadesValor'];
$artefatosValor = $_POST['artefatosValor'];

$entidade1 = $entidadesQTD[0];
$entidade2 = $entidadesQTD[1];
$entidade3 = $entidadesQTD[2];
$entidade4 = $entidadesQTD[3];
$entidade5 = $entidadesQTD[4];
$entidade6 = $entidadesQTD[5];
$entidade7 = $entidadesQTD[6];
$entidade8 = $entidadesQTD[7];
$entidade9 = $entidadesQTD[8];
$entidade10 = $entidadesQTD[9];

$entidadeValor1 = $entidadesValor[0];
$entidadeValor2 = $entidadesValor[1];
$entidadeValor3 = $entidadesValor[2];
$entidadeValor4 = $entidadesValor[3];
$entidadeValor5 = $entidadesValor[4];
$entidadeValor6 = $entidadesValor[5];
$entidadeValor7 = $entidadesValor[6];
$entidadeValor8 = $entidadesValor[7];
$entidadeValor9 = $entidadesValor[8];
$entidadeValor10 = $entidadesValor[9];

$artefato1 = $artefatosValor[0];
$artefato2 = $artefatosValor[1];
$artefato3 = $artefatosValor[2];
$artefato4 = $artefatosValor[3];
$artefato5 = $artefatosValor[4];
$artefato6 = $artefatosValor[5];
$artefato7 = $artefatosValor[6];
$artefato8 = $artefatosValor[7];
$artefato9 = $artefatosValor[8];
$artefato10 = $artefatosValor[9];

$estado = false;

if ($estado == false) {
    // Insere os dados no banco de dados
    $sql = "INSERT INTO entidadesqtd (qtd1, qtd2, qtd3, qtd4, qtd5, qtd6, qtd7, qtd8, qtd9, qtd10) VALUES
 ('$entidade1', '$entidade2', '$entidade3', '$entidade4', '$entidade5', '$entidade6', '$entidade7', '$entidade8', '$entidade9','$entidade10')";

    $sql1 = "INSERT INTO entidadesvalor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) 
VALUES ('$entidadeValor1', '$entidadeValor2', '$entidadeValor3', '$entidadeValor4', '$entidadeValor5', '$entidadeValor6', '$entidadeValor7', '$entidadeValor8', '$entidadeValor9','$entidadeValor10')";

    $sql2 = "INSERT INTO artefatosValor (valor1, valor2, valor3, valor4, valor5, valor6, valor7, valor8, valor9, valor10) 
VALUES ('$artefato1', '$artefato2', '$artefato3', '$artefato4', '$artefato5', '$artefato6', '$artefato7', '$artefato8', '$artefato9','$artefato10')";

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
    $estado = true;
}

if ($estado == true) {
    // Insere os dados no banco de dados
    $sql = "UPDATE entidadesqtd SET qtd1 = '$entidade1', qtd2 = '$entidade2', qtd3 = '$entidade3', qtd4 = '$entidade4', qtd5 = '$entidade5', qtd6 = '$entidade6', qtd7 = '$entidade7', qtd8 = '$entidade8', qtd9 = '$entidade9', qtd10 = '$entidade10' WHERE id_entidadesqtd = (SELECT MAX(id_entidadesqtd) FROM entidadesqtd)";


    $sql1 = "UPDATE entidadesvalor SET valor1 = '$entidadeValor1', valor2 = '$entidadeValor2', valor3 = '$entidadeValor3', valor4 = '$entidadeValor4', valor5 = '$entidadeValor5', valor6 = '$entidadeValor6', valor7 = '$entidadeValor7', valor8 = '$entidadeValor8', valor9 = '$entidadeValor9', valor10 = '$entidadeValor10' WHERE id_entidadesvalor = (SELECT MAX(id_entidadesvalor) FROM entidadesvalor)";

    $sql2 = "UPDATE artefatosvalor SET valor1 = '$artefato1', valor2 = '$artefato2', valor3 = '$artefato3', valor4 = '$artefato4', valor5 = '$artefato5', valor6 = '$artefato6', valor7 = '$artefato7', valor8 = '$artefato8', valor9 = '$artefato9', valor10 = '$artefato10' WHERE id_artefatosvalor = (SELECT MAX(id_artefatosvalor) FROM artefatosvalor)";

    if ($conn->query($sql) === TRUE) {
        echo "entidadesQTD atualizada com sucesso!\n";
    } else {
        echo "Erro ao atualizar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql1) === TRUE) {
        echo "entidadesValor atualizada com sucesso!\n";
    } else {
        echo "Erro ao atualizar a informação: \n" . $conn->error;
    }

    if ($conn->query($sql2) === TRUE) {
        echo "artefatosValor atualizada com sucesso!\n";
    } else {
        echo "Erro ao atualizar a informação: \n" . $conn->error;
    }

    $sql3 = "UPDATE cliente 
SET moeda = '$moeda', 
mps = '$mps', 
clique = '$clique',  
FROM entidadesqtd, entidadesvalor, artefatosvalor 
WHERE id_entidadesqtd = SELECT MAX(id_entidadesqtd), 
id_entidadesvalor = SELECT MAX(id_entidadesvalor), 
id_cliente = SELECT MAX(id_cliente), 
id_artefatosvalor = SELECT MAX(id_artefatosvalor)";

    if ($conn->query($sql3) === TRUE) {
        echo "cliente atualizada com sucesso!\n";
    } else {
        echo "Erro ao atualizar a informação: \n" . $conn->error;
    }
    $conn->close();
}
