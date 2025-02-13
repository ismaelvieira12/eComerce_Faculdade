<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .logo-login {
           font-size: 40px;
           font-weight: 100;
           font-family: Arial, Helvetica, sans-serif;
           color: #2d2d2d;
           margin-top: 0;
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
    <div class="login-container ">
        <h2 class="logo-login">Login</h2>
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
</body>
</html>

