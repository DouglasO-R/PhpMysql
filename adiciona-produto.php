<?php
include_once "cabecalho.php";
include_once "class/Categoria.php";
include_once "class/ICategoria.php";
include_once "class/Produto.php";
include_once "class/IProduto.php";
include_once "class/ServiceProduto.php";
include_once "class/IServiceProduto.php";
 
   verificaLogado();

    $produto = new Produto();
    $categoria = new Categoria();
    $categoria->setId($_POST["categoria_id"]);

    $produto->setNome($_POST["nome"]);
    $produto->setPreco($_POST["preco"]);
    $produto->setDescricao($_POST["descricao"]);
    $produto->setCategoria($categoria);
    $produto->setUsado($_POST["usado"]);

    if(array_key_exists('usado',$_POST)){
        $produto->setUsado("true");
    } else {
        $produto->setUsado("false");
    }

    $serviceP = new ServiceProduto($conexao,$produto);

    if($serviceP->insereProduto()) {
    ?>
        <p class="alert-success">Produto <?= $produto->getNome(); ?>, <?= $produto->getPreco(); ?> adicionado com sucesso!</p>
    <?php
         } else {
    ?>
        <p class="alert-danger">O produto <?= $produto->getNome(); ?> não foi adicionado</p>
    <?php
        }
    ?>
    