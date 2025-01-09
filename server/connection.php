<?php 
    // Vamos precisar de 4 variaveis para conexão

    $hostname = "localhost";
    $bancodedados = "ecommerce";
    $usuario = "root";
    $senha = "";


// Agr eremos criar um obj para conexão
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
        echo "Conectado com sucesso!";
    };