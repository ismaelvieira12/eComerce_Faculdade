<?php
    $conn = mysqli_connect("localhost","root","","ecommerce")
    or die("Couldn't connect to database");
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