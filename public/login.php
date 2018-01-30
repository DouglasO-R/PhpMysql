<?php

namespace Source;

include_once "cabecalho.php";
require_once "../vendor/autoload.php";

$usuario = new Usuario();
$usuario->setEmail($_POST["email"])
		->setSenha($_POST["senha"]);

$service = new ServiceUsuario($conexao,$usuario);

if($service->buscaUsuario() == null){
    $_SESSION["danger"] = "vc nao tem acesso"; 
    header("Location:index.php");    
} else {
    $_SESSION["success"] = "logado com sucesso";
    header("Location: index.php");
    logaUsuario($usuario->getEmail());
}