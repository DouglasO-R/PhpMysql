<?php
include_once "cabecalho.php";  



$categorias = listaCategorias($conexao);
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
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