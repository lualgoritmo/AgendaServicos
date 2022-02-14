<?php
       require_once "endereco.class.php";

    class Cliente 
    {   
        private $id_cliente;
        private $nomeCliente;
        private $emailCliente;
        private $rgCliente;
        private $cpfCliente;
        private $dataMatriculaCliente;
        private $enderecos;
        private $id_usuario;

        public function __construct($id_cliente = null, $nomeCliente = null, $emailCliente = null,
            $rgCliente = null, $cpfCliente = null, $dataMatriculaCliente = null,
            $id_endereco,$cep, $rua,$bairro,$numero_residencia,
            $cidade, $estado,$id_usuario)
        {
            $this->id_cliente = $id_cliente;
            $this->nomeCliente = $nomeCliente;
            $this->emailCliente = $emailCliente;
            $this->rgCliente = $rgCliente;
            $this->cpfCliente = $cpfCliente;
            $this->dataMatriculaCliente = $dataMatriculaCliente;
            $this->enderecos[] = new Endereco($id_endereco, $cep, $rua,
            $bairro, $numero_residencia,
            $cidade, $estado);
        }
           
        public function getId_cliente(){return $this->id_cliente;}
    
        public function getNomeCliente()
        {
                return $this->nomeCliente;
        }

        public function setNomeCliente($nomeCliente)
        {
                $this->nomeCliente = $nomeCliente;

        }

        public function getEmailCliente()
        {
                return $this->emailCliente;
        }

        public function setEmailCliente($emailCliente)
        {
                $this->emailCliente = $emailCliente;

        }

        public function getRgCliente()
        {
                return $this->rgCliente;
        }

        public function setRgCliente($rgCliente)
        {
                $this->rgCliente = $rgCliente;

        }

        public function getCpfCliente()
        {
                return $this->cpfCliente;
        }

        public function setCpfCliente($cpfCliente)
        {
                $this->cpfCliente = $cpfCliente;

        }

        public function getDataMatriculaCliente()
        {
                return $this->dataMatriculaCliente;
        }

        public function setDataMatriculaCliente($dataMatriculaCliente)
        {
                $this->dataMatriculaCliente = $dataMatriculaCliente;

        }
        public function adicionarEndereco()
        {
            $this->enderecos[] = new Endereco($id_endereco, $cep, 
                $rua, $bairro, $numero_residencia,
                $cidade, $estado);
        }

        public function getEnderecos(){return $this->enderecos;}

        public function setEnderecos($enderecos)
        {
                $this->enderecos = $enderecos;

        }

        public function getId_usuario(){return $this->id_usuario;}

        public function setId_usuario($id_usuario)
        {
                $this->id_usuario = $id_usuario;

        }
    }
?>