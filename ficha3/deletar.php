<?php
require_once 'ligarBD.php';

//delete cliente from db where id = value nome from form;
$sql = "DELETE FROM clientes WHERE id = $_GET[id]";
if ($conn->query($sql) === TRUE) {
    echo "Cliente eliminado com sucesso";
    header("Location: ver.php");
} else {
    echo "Erro ao eliminar cliente: " . $conn->error;
}


?>