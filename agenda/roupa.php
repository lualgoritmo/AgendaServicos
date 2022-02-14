<?php

    require_once "model/usuario.class.php";
    require_once "model/perfil.class.php";
    require_once "model/servicos.class.php";

    $perfil = new Perfil(null,"admin");
    $servicos = new Servicos(null,"10/10/2021",
    "08:00","Feito","200,00");

    $usuario = new Usuarios("Clodovil Martins","teste@teste.com",
    "01/10/1983", $perfil,null,"123456789","Boraz","Frutas",
    "15", "Serra", "ES",null,
    "654321","123456789111",null,"Celular",
    "27/9-1234-1234","27/9-0000-0000");
    $usuario->adicionarTelefone(null, "Celular2:", "31/9-9999-7777","000000000");

    

    /*$usuario1->addEndereco(null,"000000000","Foice De lá","MarioDemaz",
    "30", "Campinas", "BA");*/

        echo"Objeto Usuário<br/>";
        echo"Nome: ".$usuario->getNome()."<br/>";
        echo"E-mail: ".$usuario->getEmail()."<br/>";
        echo"Data de Cadastro: ".$usuario->getData_cadastro()."<br/>";
        //COMPOSIÇÃO DOCUMENTOS 
        echo"COMPOSIÇÃO DOCUMENOTS E USUÁRIO <br/>";
        echo"ID: ".$usuario->getDocumentos()->getId_documento()."<br/>";
        echo"RG: ".$usuario->getDocumentos()->getRg()."<br/>";
        echo"CPF: ".$usuario->getDocumentos()->getCpf()."<br/>";
        echo"---------------------------------------------------<br/>";
        echo"<pre>";
        foreach($usuario->getTelefones() as $telefone)
        {
            echo"Tipo Telefone: ".$telefone->getTipo_telefone()."<br/>";
            echo"Telefone do Cliente: ".$telefone->getCliente_telefone()."<br/>";
            echo"Atendente Serviço".$telefone->getAtendente_telefone()."<br/>";
        }
        echo"---------------------------------------------------<br/>";
        echo"Objeto Perfil-Associação: <br/>";
        echo"Perfil: ".$usuario->getPerfil()->getDescricao_perfil()."<br/>";
        echo"-------------------------------------------<br/>";
        //AGREGAÇÃO ADICIONANDO SERVIÇO
        $servicos = new Servicos(null,"
        13/10/2021",
        "08:00","Feito","200,00");
        $usuario->adicionarServicos($servicos);
       
        echo"OBJETO SERVIÇOS AGREGAÇÃO <br/>";
        foreach($usuario->getServicos() as $tarefas)
        {
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
        
?>