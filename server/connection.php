<!-- // server/authenticate.php -->

<!-- // server/connection.php -->
<?php
if (!session_id()) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

<?php
session_start();
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($conn) { // Verifica se a conexão foi estabelecida corretamente
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username=? AND password=?");
        if ($stmt) {  // Verifica se a preparação do statement foi bem-sucedida
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $_SESSION['username'] = $username;
                header('Location: ../admin/index.php');
                exit();
            } else {
                echo "<p class='text-danger'>Usuário ou senha inválidos!</p>";
            }
        } else {
            echo "<p class='text-danger'>Erro na preparação da consulta: " . $conn->error . "</p>";
        }
    } else {
        echo "<p class='text-danger'>Erro na conexão com o banco de dados.</p>";
    }
}
?>
