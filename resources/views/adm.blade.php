<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .login-container h2 {
        color: #c04564;
        text-align: center;
    }
    
    .login-form {
        margin-top: 20px;
        text-align: center;
    }
    
    .login-form input[type="text"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    .login-form input[type="submit"] {
        background-color: #c04564;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }
    
    .login-form input[type="submit"]:hover {
        background-color: #a0344c;
    }

    .signup-link {
        display: block;
        margin-top: 10px;
        text-align: center;
    }

    .signup-link a {
        color: #c04564;
        text-decoration: none;
        padding: 3%;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login do administrador</h2>
    <form class="login-form" action="#" method="post">
        <input id="login" type="text" name="login" placeholder="Login">
        <input id="senha" type="password" name="senha" placeholder="Senha">
        <input id="entrar" type="submit" value="Entrar">
        <div class="signup-link">
        <a href="cadastro.html">Cadastro</a>
        <a href="{{ route('home') }}">Ir para a tela inicial</a> <!--class="back-link back-to-home"-->
        </div> 
    </form>
</div>

</body>
</html>
