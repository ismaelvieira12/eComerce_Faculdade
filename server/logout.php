<!-- // server/logout.php -->
<?php
session_start();
session_destroy();
header('Location: ../admin/login.php');
exit();
?>