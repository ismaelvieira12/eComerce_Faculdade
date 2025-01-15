<!-- Fazendo a conexão com o banco de dados -->

<?php

    // Criando as variáveis
    $host = 'localhost'; // Endereço do servidor MySQL
    $username = 'root'; // Nome de usuário
    $password = '';  //Senha do usuário
    $dbname = 'ecommerce'; // Nome do banco de dados criado
    $conn; // Propriedade para armazenar a conexão
    
    
    // Método para criar a conexão com o banco de dados
        //Criando conexão usando OBJETO

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_errno) {
            die('Falha na conexão'. $conn->connect_error);
        }else{
            echo'Conectado com Sucesso!';
            $conn->set_charset('Conectado com Sucesso!');
        }
    

?>
