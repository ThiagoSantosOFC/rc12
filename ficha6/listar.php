<?php

require_once 'ligarBD.php';

//select alunos
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);
//verificar se existem alunos


if ($result->num_rows > 0) {

    //get data of each row
    while ($row = $result->fetch_assoc()) {
        $alunos[] = $row;
    }
    //parse alunos to json
    echo json_encode($alunos);
    //close connection
    $conn->close();
} else {
    //close connection

    return json_encode(array('status' => 'sem alunos'));
    $conn->close();
}
