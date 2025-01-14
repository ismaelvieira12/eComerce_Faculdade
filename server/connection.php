<!-- Fazendo a conexão com o banco de dados -->

<?php

    class Database {
        // Criando as variáveis
        private $host = 'localhost'; // Endereço do servidor MySQL
        private $username = 'root'; // Nome de usuário
        private $password = '';  //Senha do usuário
        private $dbname = 'ecommerce'; // Nome do banco de dados criado
        private $conn; // Propriedade para armazenar a conexão
    }
    
    // Método para criar a conexão com o banco de dados
    public function __construct($host, $username, $password, $dbname) {
        //Criando conexão usando OBJETO

        $conn = new mysqli($host, $username, $password, $dbname);
        if ($conn->connect_error) {
            die('Falha na conexão'. $conn->connect_error);
        }else{
            echo'Conectado com sucesso!!';
            $conn->set_charset('Conectado com Sucesso!');
        }
    }