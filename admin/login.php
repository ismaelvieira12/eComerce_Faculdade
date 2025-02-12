
<form action="" method="post">
  <div>
    <label for="exampleInputEmail1" class="form-label">Digite seu Email</label>
    <input type="email" value="" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Crie uma senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary btn">Cadastrar</button>
<div class="login-container ">
    <h2>Login</h><br><br>
    <form method="POST" action="../server/authenticate.php" id="loginForm">
    <div>
        <label for="email" class="form-label">Digite seu Email</label>
        <input type="email" value="" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Digite sua senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary btn">Cadastrar</button>
</form>
</div>
<?php include("header.php");?>
