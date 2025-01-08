<?php
    $conn = mysqli_connect("localhost","root","","ecommerce")
    or die("Couldn't connect to database");
?>

<!-- // server/authenticate.php -->
<?php
    session_start();
    include('connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM admins WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header('Location: ../admin/index.php');
        } else {
            echo "<p class='text-danger'>Usuário ou senha inválidos!</p>";
        }
    }
?>

<!-- // server/logout.php -->
<?php
    session_start();
    session_destroy();
    header('Location: ../admin/login.php');
    exit();
?>

<!-- // server/connection.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
