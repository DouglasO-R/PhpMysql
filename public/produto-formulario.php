<?php
include_once "cabecalho.php";  



//$categoria = new Categoria();
$categoria = $container['categoria'];
$categoria->setId(1);

//$serviceC = new ServiceCategoria($conexao,$categoria);

$categorias = $container['ServiceCategoria']->listaCategorias();



$produto = $container['produto'];
$produto->setCategoria($categoria)
        ->setUsado("");


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