<?php
include_once "cabecalho.php";


//$usuario = new Usuario();
$usuario = $container['usuario'];
$usuario->setEmail($_POST["email"])
		->setSenha($_POST["senha"]);

//$service = new \Source\ServiceUsuario($conexao,$usuario); faz a declaração do patch qnd o escopo for global,caso use namespace nao se faz necessario a declaração do patch
//$service = new \Source\ServiceUsuario($conexao,$usuario);

$busca = $container['ServiceUsuario']->buscaUsuario();
if($busca == null){
    $_SESSION["danger"] = "vc nao tem acesso"; 
    header("Location:index.php");    
} else {
    $_SESSION["success"] = "logado com sucesso";
    header("Location: index.php");
    logaUsuario($usuario->getEmail());
}