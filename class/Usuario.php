<?php

class Usuario implements IUsuario
{
	private $email;
	private $senha;

	 public function getEmail()
    {
    	return $this->email;
    }
    public function setEmail($email)
    {
    	$this->email = $email;
    	return $this;
    }


    public function getSenha()
    {
    	return $this->senha;
    }
    public function setSenha($senha)
    {
    	$this->senha = $senha;
    	return $this;
    }	
}