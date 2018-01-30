<?php

namespace Source;

include_once "cabecalho.php";  



$categoria = new Categoria();
$categoria->setId(1);

$serviceC = new ServiceCategoria($conexao,$categoria);

$categorias = $serviceC->listaCategorias();



$produto = new Produto();
$produto->setCategoria($categoria);

$usado = "";
verificaLogado();

?>
<html>
    <form action="adiciona-produto.php" method="post">
        <table class="table">

        <?php include("formulario-base.php"); ?>

        </table>

    </form>
</html>

<?php
include_once "rodape.php";  
?>