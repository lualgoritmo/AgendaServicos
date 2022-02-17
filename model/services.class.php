<?php

    class Services
    {
        private $idService;
		private $idClient;
	    private $serviceDate;
	    private $cleaningTime;
	    private $serviceDone;
	    private $priceService;
		private $address;

        public function __construct($idService = null, $idClient = null,$serviceDate = null,
            $cleaningTime = null, $serviceDone = null, $priceService = null,Address $address)
        {
            $this->idService = $idService;
			$this->idClient = $idClient;
            $this->serviceDate = $serviceDate;
			$this->cleaningTime = $cleaningTime;
			$this->serviceDone = $serviceDone;
			$this->priceService = $priceService;
			$this->address = $address;
        }

        public function getIdService(){return $this->idService;}

		public function getIdClient(){return $this->idClient;}

	    public function getServiceDate(){return $this->serviceDate;}
	    public function setServiceDate($serviceDate)
	    {
	    	$this->serviceDate = $serviceDate;
	    }

	    public function getCleaningTime(){return $this->cleaningTime;}
	    public function setCleaningTime($cleaningTime)
	    {
	    	$this->cleaningTime = $cleaningTime;
	    }

	    public function getServiceDone(){return $this->serviceDone;}
	    public function setServiceDone($serviceDone)
	    {
	    	$this->serviceDone = $serviceDone;
	    }

	    public function getPriceService(){return $this->priceService;}
	    public function setPriceService($priceService)
	    {
	    	$this->priceService = $priceService;
	    }

		public function getAddress(){return $this->address;}
		public function setAddress(Address $address)
		{
			$this->address = $address;
		}
    }
?>