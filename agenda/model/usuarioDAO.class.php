<?php

    class UsuarioDAO extends Conexao
    {
    
        public function __construct()
        {
            parent:: __construct();
        }
      
        public function fazerLogin($email, $senha)
        {
            $sql = "SELECT * FROM usuario WHERE email = :email 
                AND senha = :senha";
            $sql = $this->bd_domestica->prepare($sql);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $sql = $sql->fetch();
                $_SESSION['logado'] = $sql['id_usuario'];
                return true;
               
            }
            return false;
        }

        public function setUsuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
            $query = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
            $sql = $this->bd_domestica->prepare($query);
            $sql->bindValue(":id_usuario", $id_usuario);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $sql = $sql->fetch();
                return true;
            }
        }   
    }
?>