<?php 
    session_start();
    require_once "model/conexao.php";
    require_once "model/usuario.class.php";
    require_once "model/perfil.class.php";
    require_once "model/servicos.class.php";
?>
<?php
    if(!isset($_SESSION['logado']))
    {
        header("Location:login.php");
        exit;
    } 

    $usuario = new Usuarios();
    $usuario->setUsuario($_SESSION['logado']);
?>
    <h1>Bem Vindo ADM!</h1>
    <!--$perfil = new Perfil(null,"admin");
    $servicos = new Servicos(null,"10/10/2021",
    "08:00","Feito","200,00");

    $usuario = new Usuarios("Clodovil Martins","teste@teste.com",
    "01/10/1983", $perfil,null,"123456789","Boraz","Frutas",
    "15", "Serra", "ES");

    $usuario1 = new Usuarios("Marina Mattos","teste@teste.com",
    "01/10/1983", $perfil,null,"123456789","Boraz","Frutas",
    "20", "Bauru", "SP");

    $usuario1->addEndereco(null,"987654321","Burma de Lá","Citologia",
    "25", "São Paulo", "MA");

    $usuario1->addEndereco(null,"000000000","Foice De lá","MarioDemaz",
    "30", "Campinas", "BA");

    //print_r($usuario);
        echo"Objeto Usuário<br/>";
        echo"Nome: ".$usuario1->getNome()."<br/>";
        echo"E-mail: ".$usuario1->getEmail()."<br/>";
        echo"Data de Cadastro: ".$usuario1->getData_cadastro()."<br/>";
        echo"---------------------------------------------------<br/>";
        echo"Objeto Perfil-Associação: <br/>";
        echo"Perfil: ".$usuario1->getPerfil()->getDescricao_perfil()."<br/>";
        echo"-------------------------------------------<br/>";
        //AGREGAÇÃO ADICIONANDO SERVIÇO
        $servicos = new Servicos(null,"13/10/2021",
        "08:00","Feito","200,00");
        $usuario->adicionarServicos($servicos);
       
        foreach($usuario->getServicos() as $tarefas)
        {
            echo"OBJETO SERVIÇOS AGREGAÇÃO <br/>";
            echo"Data Serviço: ".$tarefas->getData_servico()."<br>";
            echo"Horário Atendimento: ".$tarefas->getHorario_atendimento()."<br>";
            echo"Serviço Feito: ".$tarefas->getServico_feito()."<br>";
            echo"Preço do Serviço: ".$tarefas->getPreco_servico()."<br>";
            echo"-----------------------------------------<br/>";
        }
        foreach($usuario->getEnderecos() as $endereco)
        {
                echo"Objeto Endereco Composição <br/>";
                echo" CEP: ".$endereco->getCep()."<br/>";
                echo" Rua: ".$endereco->getRua()."<br/>";
                echo" Número Residência: ".$endereco->getNumero_residencia()."<br/>";
                echo" Bairro: ".$endereco->getBairro()."<br/>";
                echo" Cidade: ".$endereco->getCidade()."<br/>";
                echo" Estado: ".$endereco->getEstado()."<br/>";
                echo"-----------------------------------------<br/>";
        }
        
    /*echo"<pre>";
    var_dump($usuario);
    echo"</pre>";
    echo" Objeto Usuário ".$usuario->getNome()."<br/>";
    echo" Objeto Usuário ".$usuario->getEmail()."<br/>";
    
    echo"------------------------------------"."<br/";
    echo" Objeto Perfil ".$usuario->getPerfil()->getId_perfil()."<br/>";
    echo" Objeto Perfil ".$usuario->getPerfil()->getDescricao_perfil()."<br/>";*/

/*?>*/