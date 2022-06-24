<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'formulario-php';

    $conexao = new mysqli($dbHost,$dbUsername,$dbUsername,$dbPassword,$dbName)

    if(conexao -> conect_errno) {
        echo "Erro!";
    } else {
        echo "Conexão efetuada com sucesso!";
    }

?>