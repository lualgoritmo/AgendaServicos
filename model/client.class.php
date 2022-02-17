<?php

    require_once 'phone.class.php';
    require_once 'address.class.php';
    
    class Clients
    {
        private $idClient;
        private $nameClient;
        private $emailClient;
        private $sexClient;
        private $phone;
        private $address;

        public function __construct($idClient = null, $nameClient = null,
            $emailClient = null, $sexClient = null,$phone = null, $address = null,
            $idPhone, $telePhoneType, $telephone,$idAddress, $cep, $publicPlace,
            $district, $numberResidence,$city, $uf) 
        {
            $this->idClient = $idClient;
            $this->nameClient = $nameClient;
            $this->emailClient = $emailClient;
            $this->sexClient = $sexClient;
            $this->phone[] = new Phone($idPhone, $telePhoneType, $telephone);
            $this->address[] = new Address($idAddress, $cep, $publicPlace,
            $district, $numberResidence,$city, $uf);
        }
        
        public function getIdClient()
        {
                return $this->idClient;
        }

        public function getNameClient(){return $this->nameClient;}
        public function setNameClient($nameClient)
        {
            $this->nameClient = $nameClient;
        }

        public function getEmailClient(){ return $this->emailClient;}

        public function setEmailClient($emailClient){$this->emailClient = $emailClient;}

        public function getSexClient(){return $this->sexClient;}
        public function setSexClient($sexClient)
        {
            $this->sexClient = $sexClient;
        }

        public function getPhone(){return $this->phone;}

        public function setPhone($phone)
        {
            $this->phone = $phone;
        }

        public function getAddress(){return $this->address;}
        public function setAddress($address)
        {
            $this->address = $address;
        }
    }
?>