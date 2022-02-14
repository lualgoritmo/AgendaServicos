<?php
	/*Essa é a classe endereço do sistema*/
    class Address
    {
        private $idAddress;
	    private $cep;
	    private $publicPlace;
	    private $district;
	    private $city;
		private $numberResidence;
	    private $uf;

        public function __construct($idAddress = null, $cep = null, $publicPlace = null,
            $district = null, $numberResidence = null,
            $city = null, $uf = null)
        {
            $this->idAddress = $idAddress;
            $this->cep = $cep;
            $this->publicPlace = $publicPlace;
            $this->district = $district;
            $this->numberResidence = $numberResidence;
            $this->city = $city;
            $this->uf = $uf;
        }

        public function getIdAddress(){return $this->idAddress;}

	    public function getCep(){return $this->cep;}

	    public function setCep($cep)
	    {
	    	    return $this->cep = $cep;
	    }

	    public function getPublicPlace(){return $this->publicPlace;}
		
	    public function setPublicPlace($publicPlace)
	    {
	    	    $this->publicPlace = $publicPlace;
	    }

	    public function getDistrict(){return $this->district;}

	    public function setDistrict($district)
	    {
	    	$this->district = $district;
	    }
		
	    public function getCity(){return $this->city;}

	    public function setCity($city)
	    {
	    	$this->city = $city;
	    }
 
		public function getNumberResidence(){return $this->numberResidence;}

		public function setNumberResidence($numberResidence)
		{
			$this->numberResidence = $numberResidence;
		}

	    public function getUf(){return $this->uf;}

	    public function setUf($uf)
	    {
	    	$this->uf = $uf;
	    }
    }
?>