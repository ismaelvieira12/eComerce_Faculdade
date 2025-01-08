// admin/login.php
<?php include('header.php'); ?>
<form action="../server/authenticate.php" method="POST" class="container mt-5">
    <label for="username">Usuário</label>
    <input type="text" name="username" required class="form-control">
    <label for="password">Senha</label>
    <input type="password" name="password" required class="form-control">
    <button type="submit" class="btn btn-primary mt-3">Login</button>
</form>
