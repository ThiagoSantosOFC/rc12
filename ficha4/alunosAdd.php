<?php

require_once 'ligarBD.php';
require_once 'BD.php';

//verificar se o username já existe
$sql = "SELECT * FROM `alunos` WHERE `username` = '".$_POST['username']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo json_encode(array('status' => 'username já existe'));
    $conn->close();
    exit();
}else{
    //adicionar aluno 
    $sql = "INSERT INTO `alunos`(`nome`, `idade`, `ano`, `turma`, `password`, `email`, `username`) VALUES ('".$_POST['nome']."', '".$_POST['idade']."', '".$_POST['ano']."', '".$_POST['turma']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['username']."')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array('status' => 'aluno adicionado com sucesso'));
    } else {
        echo json_encode(array('status' => 'erro ao adicionar aluno'.$conn->error));
    }
}
?>
