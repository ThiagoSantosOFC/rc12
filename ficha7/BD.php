<?php

require_once 'ligarBD.php';

//criar tabela clientes na db empresax
$sql = "CREATE TABLE IF NOT EXISTS `alunos4e_t2`.`alunos`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(90) NOT NULL,
    `idade` INT NOT NULL,
    `ano` INT NOT NULL,
    `turma` VARCHAR(90) NOT NULL,
    `password` VARCHAR(90) NOT NULL,
    `email` VARCHAR(90) NOT NULL,
    `username` VARCHAR(90) NOT NULL,
    PRIMARY KEY (`id`)
 )ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    
    echo json_encode(array('status' => 'tabela criada com sucesso'));

} else {
    
    echo json_encode(array('status' => 'erro ao criar tabela'.$conn->error));
}
