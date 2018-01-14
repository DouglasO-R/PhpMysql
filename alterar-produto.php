<?php
include_once "cabecalho.php";

  $produto = new Produto();

  $produto->id = $_POST["id"];
  $produto->nome = $_POST['nome'];
  $produto->preco = $_POST['preco'];
  $produto->descricao = $_POST['descricao'];
  $produto->categoria_id = $_POST['categoria_id'];


  header("Location: produto-lista.php");

  if(array_key_exists('usado', $_POST)) {
      $produto->usado = "true";
  } else {
      $produto->usado = "false";
  }
  
  

  if(alterarProduto($conexao ,$produto)) { ?>
      <p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->preco ?> foi alterado.</p>
  <?php } else {
       ?>
      <p class="text-danger">O produto <?= $produto->nome ?> não foi alterado</p>
  <?php
  }
  ?>
  
  <?php include("rodape.php"); ?>