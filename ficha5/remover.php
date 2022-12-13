<?php

require_once "ligarbd.php";

$id = $_GET['id'];
  echo $id;
    $sql = "DELETE FROM alunos WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Registo removido com sucesso";
    } else {
        echo "Erro ao remover registo";
    }
    mysqli_close($conn);
?>


    