<?php
$servername = "localhost";
$port = "3306";
$username = "root";
$password = "";
$dbname = "empresaX";

//criar ligação
$conn = new mysqli($servername, $username, $password, $dbname, $port);
//verificar ligação
if ($conn->connect_error) {
    //send json response error
    die("Conexão falhou: " . $conn->connect_error);
}
//send json response status ok
echo json_encode(array('status' => 'ok'));

?>