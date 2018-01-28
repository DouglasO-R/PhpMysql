<?php
include_once "cabecalho.php";  
include_once "class/Categoria.php";
include_once "class/ICategoria.php";
include_once "class/Produto.php";
include_once "class/IProduto.php";
include_once "class/ServiceCategoria.php";
include_once "class/IServiceCategoria.php";


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