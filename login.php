<?php 
    session_start();
    require_once "model/conexao.php";
    require_once "model/usuarioDAO.class.php";
    require_once "model/usuario.class.php";
    require_once "model/perfil.class.php";

    if(!empty($_POST['email']) && !empty($_POST['senha']))
    {
        $email = addslashes($_POST['email']);
        $senha = md5($_POST['senha']);

        $perfil = new Perfil();
        $usuario = new Usuario(null,null,$_POST['email'],$_POST['senha'],
        null, $perfil,null, null, null, null, null,null, null, null, null, null, null,
        null, null);

        $usuarioDAO = new UsuarioDAO();
        $usuarioLogin = $usuarioDAO->fazerLogin($email, $senha);
        if($usuarioLogin)
        {
            header("Location:index.php");
            exit;
        }
        else
        {
            echo"Usuário ou senha estão errados";
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