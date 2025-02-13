
<?php session_start(); ?>
<?php include('../server/connection.php'); ?>


<!-- // admin/header.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======================== Links para Bootstrap ================= -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
    <title>Admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        label{
            font-size: 15px;
            text-align: left;
            width: 100%;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container button:hover {
            background: #0056b3;
        }

        p{
            margin-top: 5px;
            .btn-from-login{
                font-size: 12px;
            }
        }
        .error, .success {
            text-align: center;
            margin-top: 10px;
            color: white;
            padding: 5px;
            border-radius: 4px;
        }
        .error { background: #e74c3c; }
        .success { background: #2ecc71; }

        .hidden{
            display: none;
        }
    </style>
</head>
<body>
<!-- ================== Incluindo a pagina de login no html. ==================== -->
   
    <div class="login-container">
        <h2>Cadastro</h>
        <form method="POST" action="../server/connection.php" id="loginForm">
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

            <p>
                <a href="login.php" class="btn-from-login">Ja possue uma conta? Login</a>
            </p>
        </form>

        <!-- <script>
            const btnFromLogin = document.querySelector('.btn-from-login');
            const boxCadastro = document.querySelector('.login-container')
            btnFromLogin.addEventListener('click', () => {
            
        })
        </script> -->
    </div>
</body>
</html>
