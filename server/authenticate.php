<!-- // server/authenticate.php -->

    <?php 
        require("connection.php");
        if(isset($_POST)){
            $email = $_POST['email'];
            $nome = $_POST['name'];
            $password = $_POST['senha'];
            $query = "INSERT INTO usuarios (name, email, password) VALUES ('$nome', '$email', '$password')";

           //Criando regra de validação antes de enviar os dados
            $stmt = $conn->prepare($query);
            $stmt->execute();

            header("Location: http://localhost/eComerce_Faculdade/");
        }
    ?>


