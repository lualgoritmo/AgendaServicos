<?php
    abstract class Conexao
	{
		protected $bd_domestic;
		
		public function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=bd_domestic;charset=utf8";
			try
			{
				$this->bd_domestic = new PDO($parametros, "root", "",
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
	}
?>