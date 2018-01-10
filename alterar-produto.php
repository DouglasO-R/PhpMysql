<?php
   include_once "cabecalho.php";
   include_once "banco-produtos.php";
   include_once "banco-categorias.php";

  $id = $_POST["id"];
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];
  $categoria_id = $_POST['categoria_id'];
  
  header("Location: produto-lista.php");

  if(array_key_exists('usado', $_POST)) {
      $usado = "true";
  } else {
      $usado = "false";
  }
  
  if(alterarProduto($conexao ,$id,  $nome , $preco, $descricao, $categoria_id, $usado)) { ?>
      <p class="text-success">O produto <?= $nome ?>, <?= $preco ?> foi alterado.</p>
  <?php } else {
      $msg = mysqli_error($conexao);
  ?>
      <p class="text-danger">O produto <?= $nome ?> não foi alterado: <?= $msg?></p>
  <?php
  }
  ?>
  
  <?php include("rodape.php"); ?>