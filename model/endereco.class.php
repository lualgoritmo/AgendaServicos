<?php

    class Endereco
    {
        private $id_endereco;
	    private $cep;
	    private $rua;
	    private $bairro;
	    private $numero_residencia;
	    private $cidade;
	    private $estado;

        public function __construct($id_endereco = null, $cep = null, $rua = null,
            $bairro = null, $numero_residencia = null,
            $cidade = null, $estado = null)
        {
            $this->id_endereco = $id_endereco;
            $this->cep = $cep;
            $this->rua = $rua;
            $this->bairro = $bairro;
            $this->numero_residencia = $numero_residencia;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        public function getId_endereco(){return $this->id_endereco;}

	    public function getCep(){return $this->cep;}

	    public function setCep($cep)
	    {
	    	    $this->cep = $cep;
	    }

	    public function getRua(){return $this->rua;}

	    public function setRua($rua)
	    {
	    	    $this->rua = $rua;
	    }

	    public function getNumero_residencia(){return $this->numero_residencia;}

	    public function setNumero_residencia($numero_residencia)
	    {
	    	    $this->numero_residencia = $numero_residencia;

	    }

	    public function getCidade(){return $this->cidade;}

	    public function setCidade($cidade)
	    {
	    	    $this->cidade = $cidade;
	    }

	    public function getEstado(){return $this->estado;}

	    public function setEstado($estado)
	    {
	    	    $this->estado = $estado;
	    }

	    public function getBairro(){return $this->bairro;}

	    public function setBairro($bairro)
	    {
	    	    $this->bairro = $bairro;
	    }
    }
?>