<?php

require_once 'ligarBD.php';

//select alunos
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);
//verificar se existem alunos


if ($result->num_rows > 0) {

    $alunos = array();
   
    while ($row = $result->fetch_assoc()) {
        $alunos[] = $row;
    }
    return $data = json_encode($alunos);

    
    $conn->close();

    
 

   
   

} else {
    //close connection

    return json_encode(array('status' => 'sem alunos'));
    $conn->close();
    
}


$conn->close();