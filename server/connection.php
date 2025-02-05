<?php
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ecommerce';
    $conn;

    $conn = mysqli_connect($localhost, $username, $password);
    if ($conn->connect_error) {
        echo "erro de conexão";
    }else{
        echo "Conectado com sucesso!";
    }


?>