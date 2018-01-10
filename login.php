<?php
include_once "conecta.php";
include_once "banco-usuarios.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuariologado = buscaUsuario($conexao, $email, $senha);

if($usuariologado){
    header("Location:index.php?login=1");
} else {
    header("Location: index.php?login=0");
}