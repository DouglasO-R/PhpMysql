<?php
include_once "cabecalho.php";
include_once "class/Usuario.php";
include_once "class/IUsuario.php";
include_once "class/ServiceUsuario.php";
include_once "class/IServiceUsuario.php";

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