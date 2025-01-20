<!-- // server/authenticate.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando usuario</title>
</head>
<body>
    <p>enviado com sucesso</p>

    <?php 
        $email = $_POST['email'];
        $password = $_POST['password'];
        require("connection.php");
        if(isset($_POST)){
           $query = "INSERT INTO user (user_email, user_senha) VALUES ($email, $password)";
        }
    ?>
</body>
</html>
