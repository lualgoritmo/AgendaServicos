<?php
    require_once "model/conexao.php";
    require_once "endereco.class.php";
    require_once "telefone.class.php";

    class Usuarios extends Conexao
    {
        private $id_usuario;
        private $email;
        private $senha;

        public function __construct($id_usuario = null, $email = null, $senha = null)
        {
            parent:: __construct();
            $this->id_usuario = $id_usuario;
            $this->email = $email;
            $this->senha = md5($senha);
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

    class Usuario extends Conexao
    {
        private $id_usuario;
        private $nome;
        private $data_cadastro;
        private $perfil;
        private $enderecos;
        private $servicos;
        private $documentos;
        private $telefones;

        public function __construct($nome = null, $email = null, $senha = null,
            $data_cadastro = null, Perfil $perfil,$id_endereco, $cep, $rua,
            $bairro, $numero_residencia,$cidade, $estado,$id_documento,
            $rg,$cpf,$id_telefone,$tipo_telefone,
            $cliente_telefone, $atendente_telefone)
        {
            $this-> nome = $nome;
            $this-> data_cadastro = $data_cadastro;
            $this-> perfil = $perfil;
            $this-> enderecos[] = new Endereco($id_endereco, $cep, $rua,
            $bairro, $numero_residencia,
            $cidade, $estado);
            $this->servicos = array();
            $this->documentos = new Documentos($id_documento,$rg,$cpf);
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

        //MÉTODOS DOCUMENTOS COMPOSIÇÃO

        public function getDocumentos(){return $this->documentos;}

        public function setDocumentos($documentos)
        {
                $this->documentos = $documentos;
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
    }
?>