<?php

namespace Source;

class ServiceUsuario implements IServiceUsuario
{
	private $db;
	private $usuario;

	public function __construct(IConn $db, IUsuario $usuario)
	{
		$this->db = $db->connect();
		$this->usuario = $usuario;
	}

	public function buscaUsuario(){
	    $senhaMd5 = md5($this->usuario->getSenha());
	    $query = "select * from usuarios where email = :email and senha = :senha";
	    $stmt = $this->db->prepare($query);
	    $stmt->bindValue(":email",$this->usuario->getEmail());
	    $stmt->bindValue(":senha",$senhaMd5);
	    $stmt->execute();
	    $usuario = $stmt->fetch();

	    return $usuario;
	}
}