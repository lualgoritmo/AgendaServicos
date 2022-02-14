<?php
    class Perfil
    {
        private $id_perfil;
        private $descricao_perfil;

        public function __construct($id_perfil = null, $descricao_perfil = null)
        {
            $this-> id_perfil = $id_perfil;
            $this-> descricao_perfil = $descricao_perfil;
        }

        public function getId_perfil(){return $this->id_perfil;}

        public function getDescricao_perfil(){return $this->descricao_perfil;}

        public function setDescricao_perfil($descricao_perfil)
        {
                $this->descricao_perfil = $descricao_perfil;
        }
    }
?>