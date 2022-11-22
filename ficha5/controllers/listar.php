<?php

require_once 'ligarBD.php';

//select alunos
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);
//verificar se existem alunos


if ($result->num_rows > 0) {

    $alunos = array();
    //encode data to json while looping through the result
    while ($row = $result->fetch_assoc()) {
        $alunos[] = $row;
    }
    return response json_encode($alunos);
    $conn->close();
    //go to listar.html
    header('Location: ../views/listar.html');

} else {
    //close connection

    return json_encode(array('status' => 'sem alunos'));
    $conn->close();
    
}


$conn->close();
