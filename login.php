<?php
include_once "cabecalho.php";


$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = buscaUsuario($conexao, $email, $senha);

if($usuario == null){
    $_SESSION["danger"] = "vc nao tem acesso"; 
    header("Location:index.php");    
} else {
    $_SESSION["success"] = "logado com sucesso";
    header("Location: index.php");
    logaUsuario($email);
}