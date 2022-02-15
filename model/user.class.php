<?php

    require_once "address.class.php";
    require_once "phone.class.php";

    class Users
    {
        private $idUser;
        private $nameClient;
        private $email;
        private $password;
        private $perfil;
        private $address;
        private $services;
        private $phones;

        public function __construct($idUser = null,$nameClient = null, $email = null, $senha = null,
            Perfil $perfil, $idAddress,$cep, $publicPlace,$district, $numberResidence,
            $city,$uf, $idPhone,$telePhoneType,$telephone)
        {
            $this->idUser = $idUser;
            $this-> nameClient = $nameClient;
            $this-> email = $email;
            $this-> password = $password;
            $this-> perfil = $perfil;
            $this-> address[] = new Address($idAddress,$cep, $publicPlace,$district, $numberResidence,
                $city,$uf);
            $this->services = array();
            $this->phones[] = new Phones($idPhone,$telePhoneType,$telephone);
        }

        //RELAÇÃO DE ASSOCIAÇÃO
        public function getPerfil(){return $this->perfil;}

        public function setPerfil(Perfil $perfil)
        {
            $this->perfil = $perfil;
        }

        //RELAÇÃO DE COMPOSIÇÃO
        public function addAdress($idAddress,$cep, $publicPlace,$district, $numberResidence,
            $city,$uf)
        {
            $this-> address[] = new Address($idAddress,$cep, $publicPlace,$district, $numberResidence,
                $city,$uf);
        }
        public function getAddress(){return $this->address;}

        public function setAddress($address)
        {
                $this->address = $address;
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
        public function addPhones($idPhone,$telePhoneType,$telephone)
        {
            $this-> phones[] = new Telefones($idPhone,$telePhoneType,$telephone);
        }
        public function getPhones(){return $this->phones;}

        public function setPhones($phones)
        {
                $this->phones = $phones;
        }

        public function getSenha()
        {
                return $this->senha;
        }

        
        public function setSenha($senha)
        {
                $this->senha = $senha;
        }

        public function getRg(){return $this->rg;}

        public function setRg($rg)
        {
                $this->rg = $rg;
        }

        public function getCpf(){return $this->cpf;}

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;
        }
    }
?>