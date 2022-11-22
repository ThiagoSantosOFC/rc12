<?php

require_once 'ligarBD.php';
require_once 'BD.php';

//receber dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['username'];

//verificar se o username já existe
$sqlVerifica = "SELECT * FROM alunos WHERE username = '$username'";
$result = $conn->query($sqlVerifica);

if ($result->num_rows > 0) {
    echo json_encode(array('status' => 'error', 'message' => 'username já existe'));

    $conn->close();

    exit();
} else {
    //adicionar aluno 
    $sql = "INSERT INTO `alunos`(`nome`, `idade`, `ano`, `turma`, `password`, `email`, `username`) VALUES ('" . $_POST['nome'] . "', '" . $_POST['idade'] . "', '" . $_POST['ano'] . "', '" . $_POST['turma'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array('status' => 'ok', 'message' => 'aluno adicionado com sucesso'));
        $conn->close();
    } else {
        echo json_encode(array('status' => 'erro ao adicionar aluno' . $conn->error));
        $conn->close();
    }
}
