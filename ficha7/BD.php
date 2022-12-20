<?php

require_once 'ligarBD.php';

// criação da tabela user
$sql = "CREATE TABLE IF NOT EXISTS `jogo`.`user`(
    `iduser` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(90) NOT NULL,
    `password` VARCHAR(90) NOT NULL,
    `email` VARCHAR(90) NOT NULL,
    
    PRIMARY KEY (`iduser`)

 ) ENGINE = InnoDB;";



if ($conn->query($sql) === TRUE) {
    
    echo json_encode(array('status' => 'tabela criada com sucesso'));

} else {
    
    echo json_encode(array('status' => 'erro ao criar tabela'.$conn->error));
}
