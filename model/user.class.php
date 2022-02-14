<?php

    require_once "endereco.class.php";
    require_once "telefone.class.php";

    class Usuario
    {
        private $id_usuario;
        private $nome;
        private $email;
        private $senha;
        private $data_cadastro;
        private $perfil;
        private $enderecos;
        private $rg;
        private $cpf;
        private $servicos;
        private $telefones;

        public function __construct($id_usuario = null,$nome = null, $email = null, $senha = null,
            $data_cadastro = null, Perfil $perfil,$id_endereco, $cep, $rua,
            $bairro, $numero_residencia,$cidade, $estado,
            $rg,$cpf,$id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone)
        {
            $this->id_usuario = $id_usuario;
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> senha = $senha;
            $this-> data_cadastro = $data_cadastro;
            $this-> perfil = $perfil;
            $this-> enderecos[] = new Endereco($id_endereco, $cep, $rua,
            $bairro, $numero_residencia,
            $cidade, $estado);
            $this->servicos = array();
            //$this->documentos = new Documentos($id_documento,$rg,$cpf);
            $this->telefones[] = new Telefones($id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone);
        }

        public function getId_usuario(){return $this->id_usuario;}

           
        public function getNome(){ return $this->nome;}

        public function setNome($nome)
        {
                $this->nome = $nome;
        }

        public function getEmail(){return $this->email;}

        public function setEmail($email)
        {
                $this->email = $email;

        }

        public function getData_cadastro(){return $this->data_cadastro;}

        public function setData_cadastro($data_cadastro)
        {
                $this->data_cadastro = $data_cadastro;
        }
        
        //RELAÇÃO DE ASSOCIAÇÃO
        public function getPerfil(){return $this->perfil;}

        public function setPerfil(Perfil $perfil)
        {
            $this->perfil = $perfil;
        }

        //RELAÇÃO DE COMPOSIÇÃO
        public function addEndereco($id_endereco, $cep, $rua,
            $bairro, $numero_residencia,$cidade, $estado)
        {
            $this-> enderecos[] = new Endereco($id_endereco, $cep, $rua,
            $bairro, $numero_residencia,
            $cidade, $estado);
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
        public function getTelefones(){return $this->telefones;}

        public function setTelefones($telefones)
        {
                $this->telefones = $telefones;
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