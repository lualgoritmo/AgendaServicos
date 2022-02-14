<?php
  
  class ServicosDAO extends Conexao
  {

        function __construct()
        {
            parent::__construct();
        }

        //METÓDO INSERIR SERVIÇOS
        function servicosUsuarios($servico)
        {   


            $sql = "INSERT INTO servicos (data_servico, horario_atendimento, servico_feito,
              preco_servico)VALUES (?, ?, ?, ?)";
            
            try
            {
                $servico = $this->bd_domestica->prepare($sql);
                $servico->bindValue(1, $servico->getId_usuario());
                $servico->bindValue(2, $servico->getData_servico());
                $servico->bindValue(3, $servico->getHorario_atendimento());
                $servico->bindValue(4, $servico->getServico_feito());
                $retorno = $servico->execute();
                
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
        //FIM METÓDO INSERIR SERVIÇOS

    }  

?>






