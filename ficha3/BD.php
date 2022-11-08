<?php

require_once 'ligarBD.php';

//criar tabela clientes na db empresax
$sql = "CREATE TABLE IF NOT EXISTS `empresaX`.`clientes`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(90) NOT NULL,
    `idade` INT NOT NULL,
    PRIMARY KEY (`id`)
 )ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Tabela clientes criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();


?>