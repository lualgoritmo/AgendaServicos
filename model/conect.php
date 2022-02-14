<?php
    abstract class Conexao
	{
		protected $bd_domestica;
		
		public function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=bd_domestica;charset=utf8";
			try
			{
				$this->bd_domestica = new PDO($parametros, "root", "",
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
	}
?>