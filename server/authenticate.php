<!-- // server/authenticate.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando usuario</title>
</head>
<body>

    <?php 
        require("connection.php");
        if(isset($_POST)){
            $email = $_POST['email'];
            $nome = $_POST['name'];
            $password = $_POST['senha'];
            $query = "INSERT INTO user (nome, email, senha) VALUES ('$nome', '$email', '$password')";

           //Criando regra de validação antes de enviar os dados
            $stmt = $conn->prepare($query);
            $stmt->execute();
        }
    ?>
</body>
</html>


