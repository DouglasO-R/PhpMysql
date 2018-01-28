<?php
include_once ("cabecalho.php");
include_once "class/Produto.php";
include_once "class/IProduto.php";
include_once "class/ServiceProduto.php";
include_once "class/IServiceProduto.php";



verificaLogado();

$produto = new Produto();
$produto->setId($_POST["id"]);

$serviceP = new ServiceProduto($conexao,$produto);

if($serviceP->removeProduto() == false)
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
