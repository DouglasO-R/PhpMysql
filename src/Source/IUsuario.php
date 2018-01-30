<?php

namespace Source;

interface IUsuario
{
	public function getEmail();
    public function setEmail($email);


    public function getSenha();
    public function setSenha($senha);
}