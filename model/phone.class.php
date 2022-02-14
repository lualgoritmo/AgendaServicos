<?php

    class Telefones 
    {
        private $id_telefone;
        private $tipo_telefone;
        private $cliente_telefone;
        private $atendente_telefone;

        public function __construct($id_telefone = null,$tipo_telefone = null,
        $cliente_telefone = null, $atendente_telefone = null)
        {
            $this-> id_telefone = $id_telefone;
            $this-> tipo_telefone = $tipo_telefone;
            $this-> cliente_telefone = $cliente_telefone;
            $this-> atendente_telefone = $atendente_telefone;
        }

        public function getId_telefone(){return $this->id_telefone;}

        public function getTipo_telefone(){return $this->tipo_telefone;}

        public function setTipo_telefone($tipo_telefone)
        {
                $this->tipo_telefone = $tipo_telefone;
        }

        public function getCliente_telefone(){return $this->cliente_telefone;}

        public function setCliente_telefone($cliente_telefone)
        {
                $this->cliente_telefone = $cliente_telefone;
        }

        public function getAtendente_telefone(){return $this->atendente_telefone;}

        public function setAtendente_telefone($atendente_telefone)
        {
                $this->atendente_telefone = $atendente_telefone;
        }
    }
?>