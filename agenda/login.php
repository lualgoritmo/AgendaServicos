<?php 
    session_start();
    require_once "model/conexao.php";
    require_once "model/usuario.class.php";

    if(!empty($_POST['email']) && !empty($_POST['senha']))
    {
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];

        $usuario = new Usuarios($_POST['email'], $_POST['senha']);
        $us = $usuario->fazerLogin($email, $senha);

        if($usuario->fazerLogin($email, $senha))
        {
            header("Location:index.php");
            exit;
        }
        else
        {
            echo"<script>alert('Usuário ou senha estão errados')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       
        h1,form
        {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form input
        {
            padding: 6px;
            width: 30%;
            margin-top: 6px;
        }
        .inputEnviar
        {
            width: 10%;
        }
    </style>
</head>
<body>
    <h1>Faça o seu Login</h1>
    <form method="POST">
        <input type="text" id="email" name="email" 
            placeholder="Digite o seu E-mail" />
        <input type="password" name="senha" 
            placeholder="Digite a sua senha" />
        <input class="inputEnviar" type="submit" value="Entrar" />
    </form>
</body>
</html>