<?php
$servername = "localhost";
$port = "3307";
$username = "root";
$password = "";
$dbname = "alunos4e_t2";

//criar ligação
$conn = new mysqli($servername, $username, $password, $dbname, $port);
//verificar ligação
if ($conn->connect_error) {

    echo json_encode(array('status' => 'error'.$conn->connect_error));
    
}

echo json_encode(array('status' => 'ok'));

?>