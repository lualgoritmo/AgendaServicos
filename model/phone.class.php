<?php

    class Phones 
    {
        private $idPhone;
        private $telePhoneType;
        private $telephone;
    
        public function __construct($idPhone = null,$telePhoneType = null,$telephone = null)
        {
            $this-> idPhone = $idPhone;
            $this-> telePhoneType = $telePhoneType;
            $this-> telephone = $telephone;
        }

        public function getIdPhone(){return $this->idPhone;}

        public function setIdPhone($idPhone)
        {
            $this->idPhone = $idPhone;
        }
        
        public function getTelePhoneType(){return $this->telePhoneType;}

        public function setTelePhoneType($telePhoneType)
        {
            $this->telePhoneType = $telePhoneType;
        }

        public function getTelephone(){return $this->telephone;}

        public function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        }
    }
?>