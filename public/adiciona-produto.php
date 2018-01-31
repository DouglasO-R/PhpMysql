<?php
include_once "cabecalho.php";

   verificaLogado();

    $produto = $container['produto'];
    $categoria = $container['categoria'];
    $categoria->setId($_POST["categoria_id"]);

    $produto->setNome($_POST["nome"]);
    $produto->setPreco($_POST["preco"]);
    $produto->setDescricao($_POST["descricao"]);
    $produto->setCategoria($categoria);
    $produto->setUsado($_POST["usado"]);

    if(array_key_exists('usado',$_POST)){
        $produto->setUsado(1);
    } else {
        $produto->setUsado(0);
    }

    //$serviceP = new ServiceProduto($conexao,$produto);

    if($container['ServiceProduto']->insereProduto()) {
    ?>
        <p class="alert-success">Produto <?= $produto->getNome(); ?>, <?= $produto->getPreco(); ?> adicionado com sucesso!</p>
    <?php
         } else {
    ?>
        <p class="alert-danger">O produto <?= $produto->getNome(); ?> não foi adicionado</p>
    <?php
        }
    ?>
    