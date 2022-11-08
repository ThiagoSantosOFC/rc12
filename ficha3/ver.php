<?php

require_once 'ligarBD.php';
 
//select clientes from db
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

//verificar se existem clientes
if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Idade: " . $row["idade"]. "<BR>";
    }
} else {
    echo "0 resultados";
}


?>