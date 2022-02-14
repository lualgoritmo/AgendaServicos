<?php

    class UsuarioDAO extends Conexao
    {
        public function __construct()
        {
                parent:: __construct();
        }

        function fazerLogin($email, $senha)
        {
            $query = "SELECT * FROM usuario WHERE email = :email 
                AND senha = :senha";
            $sql = $this->bd_domestica->prepare($query);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
            $this->bd_domestica = null;
            
            if($sql->rowCount() > 0)
            {
                $sql = $sql->fetch();
                $_SESSION['logado'] = $sql['id_usuario'];
                return true;
            }
            return false;
        }

        function inserirUsuario($usuario)
        {
            $query = "INSERT INTO usuario(email,data_matricula)
                VALUES(?,?)";
            $usuario = $this->$query->bd_domestica->prepare($query);
            $usuarioD->bindValue(1,$cliente->getEmail());
            $usuarioD->bindValue(2,$cliente->getData_cadastro());
            $usuarioD->execute();
            $this->bd_domestica = null;
            
            if(!usuarioD)
            {
                return false;
            }
        
        }
    }
?>