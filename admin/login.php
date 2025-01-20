
<div class="login-container">
<h2>Cadastro</h2>
  <form method="POST" action="../server/authenticate.php" id="loginForm">
    <div>
      <label for="name" class="form-label">Digite seu Nome</label>
      <input type="text" value="" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome">
    </div>
    <div>
      <label for="email" class="form-label">Digite seu Email</label>
      <input type="email" value="" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Crie uma senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary btn">Cadastrar</button>
  </form>
</div>


