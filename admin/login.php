
<!--Serve para pegar os valores dos campos inputs  -->
<?php
  
  if (isset($_POST["submit"]) && strlen($_POST['email']) > 0){
    print_r($_POST["name"]);
    print_r($_POST["email"]);
    print_r($_POST["password"]);
  }
?>

<form action="ecommerce" method="post">
  <div>
    <label for="exampleInputEmail1" class="form-label">Digite seu Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Crie uma senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary btn">Cadastrar</button>
</form>
