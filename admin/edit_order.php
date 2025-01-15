<?php 
    require("./connection.php");
    if(isset($_POST)){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["senha"];

        $query = "INSERT INTO usuarios (email, name, password) VALUES ('$email', '$name', '$password')";
    }
 ?>