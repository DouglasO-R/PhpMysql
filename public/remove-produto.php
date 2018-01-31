<?php
include_once "cabecalho.php";



verificaLogado();

$produto = $container['produto'];
$produto->setId($_POST["id"]);



//$serviceP = new ServiceProduto($conexao,$produto);

if($container['ServiceProduto']->removeProduto() == false)
{
    $_SESSION["success"] = "removido com suceso";
    header("Location: produto-lista.php");
}else {
    $_SESSION["danger"] = "nao foi possivel remover";
    header("Location: produto-lista.php");
}



include ("rodape.php");
