<?php
require_once("class/IConn.php");

class Conn implements IConn
{
	private $typedb;
	private $host;
	private $dbname;
	private $user;
	private $pass;

	public function __construct($typedb,$host,$dbname,$user,$pass)
	{
		$this->typedb = $typedb;
		$this->host = $host;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->pass = $pass;

	}

	public function connect()
	{
		try{

			return new \PDO("{$this->typedb}:host={$this->host};dbname={$this->dbname}",$this->user,$this->pass);

		} catch(\PDOException $e) {
			echo "Erro!Mensagem: ".$e->getMessage()." Code: ".$e->getCode();
		}
	}

}
