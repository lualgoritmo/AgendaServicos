<?php

    require_once "address.class.php";
    require_once "phone.class.php";

    class Employee
    {
        private $idEmployee;
        private $nameEmployee;
        private $emailEmployee;
        private $password;
        private $registrationDate;
        private $perfil;
        private $address;
        private $services;
        private $phones;

        public function __construct($idEmployee = null,$nameEmployee = null, $emailEmployee = null, $password = null,
            $registrationDate = null, Perfil $perfil,$idAddress, $cep, $publicPlace,$district, $numberResidence, $city, $uf, 
            $id_telefone,$tipo_telefone, $cliente_telefone, $atendente_telefone)
        {
            $this->id_usuario = $id_usuario;
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
            $this-> data_cadastro = $data_cadastro;
            $this-> perfil = $perfil;
            $this-> address[] = new Endereco($idAddress, $cep, $publicPlace,$district, $numberResidence, $city, $uf);
            $this->servicos = array();
            $this->phone[] = new Phones($id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone);
        }

     
        //RELAÇÃO DE ASSOCIAÇÃO
        public function getPerfil(){return $this->perfil;}

        public function setPerfil(Perfil $perfil)
        {
            $this->perfil = $perfil;
        }

        //RELAÇÃO DE COMPOSIÇÃO
        public function addAddress($idAddress, $cep, $publicPlace,$district, $numberResidence, $city, $uf)
        {
            $this-> address[] = new Address($idAddress, $cep, $publicPlace,$district, $numberResidence, $city, $uf);
        }
        public function getEnderecos(){return $this->enderecos;}

        public function setEnderecos($enderecos)
        {
                $this->enderecos = $enderecos;
        }
        
        //AGREGAÇÃO USUARIO E SERVIÇOS
        public function adicionarServicos(Servicos $servico)
        {
            array_push($this->servicos, $servico);
        }
        public function getServicos(){return $this->servicos;}

        public function setServiços($servicos)
        {
                $this->servicos = $servicos;
        }
        

        //RELAÇÃO DE COMPOSIÇÃO TELEFONES
        public function adicionarTelefone($id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone)
        {
            $this-> telefones[] = new Telefones($id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone);
        }
        public function getPhones(){return $this->telefones;}

        public function setPhones($telefones)
        {
                $this->telefones = $telefones;
        }   
    }
?>