<?php

require_once 'ligarBD.php';
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($nome == "" || $idade == ""){
    echo "Preencha todos os campos";
    exit;
}else{
    $sql = "INSERT INTO clientes (nome, idade) VALUES ('$nome', '$idade')";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente inserido com sucesso";
        
    } else {
        echo "Erro ao inserir cliente: " . $conn->error;
    }
}

?>