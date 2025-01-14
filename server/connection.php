<!-- Fazendo a conexão com o banco de dados -->

<?php

    class Database {
        // Criando as variáveis
        private $host = 'localhost'; // Endereço do servidor MySQL
        private $username = 'root'; // Nome de usuário
        private $password = '';  //Senha do usuário
        private $dbname = 'ecommerce'; // Nome do banco de dados criado
        private $_conn; // Propriedade para armazenar a conexão
    }
    
    // Método para criar a conexão com o banco de dados
    function __construct() {
        //Criando conexão usando OBJETO
    }