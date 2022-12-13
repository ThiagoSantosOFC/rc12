<?php

require_once 'ligarBD.php';

if (isset($_GET['ordenar'])){
    $ordenar = "nome";
    $sql = "SELECT * FROM alunos ORDER BY $ordenar";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alunos[] = $row;
        }
        echo json_encode($alunos);
        $conn->close();
    } else {
        return json_encode(array('status' => 'sem alunos'));
        $conn->close();
    }

}