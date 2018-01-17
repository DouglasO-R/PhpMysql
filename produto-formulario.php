<?php
include_once "cabecalho.php";  



$categorias = listaCategorias($conexao);

$categoria = new Categoria();
$categoria->id = 1;

$produto = new Produto();
$produto->categoria = $categoria;

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