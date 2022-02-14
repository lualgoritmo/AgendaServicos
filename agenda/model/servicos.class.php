<?php

    class Servicos
    {
        private $id_servico;
	    private $data_servico;
	    private $horario_atendimento;
		private $servicoAfazer;//ADICIONAR NO BANCO AINDA
	    private $servico_feito;
	    private $preco_servico;

        public function __construct($id_servico = null, $data_servico = null,
            $horario_atendimento = null, $servicoAfazer = null,
			$servico_feito = null,$preco_servico = null)
        {
            $this->id_servico = $id_servico;
            $this->data_servico = $data_servico;
			$this->servicoAfazer = array();
            $this->horario_atendimento = $horario_atendimento;
            $this->servico_feito = $servico_feito;
			$this->preco_servico = $preco_servico;
        }

        public function getId_servico(){return $this->id_servico;}

	    public function getData_servico(){return $this->data_servico;}

	    public function setData_servico($data_servico)
	    {
	    	    $this->data_servico = $data_servico;
	    }

	    public function getHorario_atendimento(){return $this->horario_atendimento;}


	    public function setHorario_atendimento($horario_atendimento)
	    {
	    	    $this->horario_atendimento = $horario_atendimento;
	    }

	    public function getServico_feito(){return $this->servico_feito;}

	    public function setServico_feito($servico_feito)
	    {
	    	    $this->servico_feito = $servico_feito;
	    }

	    public function getPreco_servico(){return $this->preco_servico;}

	   
	    public function setPreco_servico($preco_servico)
	    {
	    	    $this->preco_servico = $preco_servico;
	    }

		function servicoAfazer()
		{
			$this->servico_Afazer = $servicoAfazer;
		}
		
		public function getServicoAfazer()
		{
				return $this->servicoAfazer;
		}

		public function setServicoAfazer($servicoAfazer)
		{
				$this->servicoAfazer = $servicoAfazer;

		}
    }
?>