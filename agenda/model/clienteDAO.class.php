<?php
  
  class ClienteDAO extends Conexao
  {

        function __construct()
        {
            parent::__construct();
        }

        //METÓDO CADASTRAR CLIENTE
        function cadastrarCliente($cliente)
        {   


            $sql = "INSERT INTO curriculo (id_usuario, email, nome, rg, cpf,data_matricula)
                VALUES (?, ?, ?, ?, ?, ?)";
            
            try
            {
                $cliente = $this->bd_domestica->prepare($sql);
                $cliente->bindValue(1, $cliente->getId_usuario());
                $cliente->bindValue(2, $cliente->getNomeCliente());
                $cliente->bindValue(3, $cliente->getEmailCliente());
                $cliente->bindValue(4, $cliente->getRgCliente());
                $cliente->bindValue(5, $cliente->getCpfCliente());
                $cliente->bindValue(6, $cliente->getDataMatriculaCliente());
                $retorno = $cliente->execute();
                
                if(!$retorno)
                {
                    print_r('$retorno');
                    exit;
                    echo "<center><h3>Erro ao inserir usuário</h3></center>"; 
                    return;                 
                }
                else
                {
                    echo"<script>alert('Currículo inserido com Sucesso')</script>";
                    return;
                }
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
            
        }

    }  

?>






