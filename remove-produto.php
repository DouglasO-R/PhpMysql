<?php
include ("cabecalho.php");

$produto = new Produto();

verificaLogado();

$produto->id = $_POST["id"];

if(removeProduto($conexao , $produto) == false)
{
    $_SESSION["success"] = "removido com suceso";
    header("Location: produto-lista.php");
}else {
    $_SESSION["danger"] = "nao foi possivel remover";
    header("Location: produto-lista.php");
}


    
?>














<?php
include ("rodape.php");
