<?php

namespace Source;

include_once "cabecalho.php";

  $produto = new Produto();
  $categoria = new Categoria();
  
  $categoria->setId($_POST['categoria_id']);

  $produto->setId($_POST["id"]);
  $produto->setNome($_POST['nome']);
  $produto->setPreco($_POST['preco']);
  $produto->setDescricao($_POST['descricao']);
  $produto->setCategoria($categoria);


  //header("Location: produto-lista.php");

  if(array_key_exists('usado', $_POST)) {
      $produto->setUsado("true");
  } else {
      $produto->setUsado("false");
  }
  
  $serviceP = new \Source\ServiceProduto($conexao,$produto);
  

  if($serviceP->alterarProduto()) { ?>
      <p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPreco() ?> foi alterado.</p>
  <?php } else {
       ?>
      <p class="text-danger">O produto <?= $produto->getNome() ?> não foi alterado</p>
  <?php
  }
  ?>
  
  <?php include("rodape.php"); ?>