
<!--Serve para pegar os valores dos campos inputs  -->
<?php
    if (isset($_POST["submit"])) {
        print_r($_POST["name"]);
        print_r($_POST["email"]);
        print_r($_POST["password"]);
    

<form>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu Nome</label>
    <input type="text" class="form-control" id="exampleInputTex" value="" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" value="" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
