

<?php
    if (isset($_POST["submit"])) {
        print_r($_POST["name"]);
        print_r($_POST["email"]);
        print_r($_POST["password"]);
    }
?>

<form>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu Nome</label>
    <input type="text" class="form-control" id="exampleInputTex" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Crie uma senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
