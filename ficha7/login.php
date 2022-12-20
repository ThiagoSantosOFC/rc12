<?php

require_once 'ligarBD.php';

 //verificar se o user existe
    $sql = "SELECT * FROM user WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo json_encode(array('status' => 'ok', 'iduser' => $row['iduser']));
            // start the session
            session_start();
            // store session data
            $_SESSION["iduser"] = $row['iduser'];
            $_SESSION["nome"] = $row['nome'];
            $_SESSION["email"] = $row['email'];
        }
    } else {
        echo json_encode(array('status' => 'erro'));
    }

?>