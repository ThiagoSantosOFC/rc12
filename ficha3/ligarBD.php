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
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso <BR>";

?>