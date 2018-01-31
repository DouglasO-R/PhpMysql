<?php 
require_once "cabecalho.php"; 

 

$produto = $container['produto'];
$produto->setId($_GET["id"]);


$produto = $container['ServiceProduto']->buscaProduto();

$categoria = $container['categoria'];


$categorias = $container['ServiceCategoria']->listaCategorias();


$selecao_usado = $produto->getUsado() ? "checked = 'checked'" : ""; 
$produto->setUsado($selecao_usado);

verificaLogado();

?>            
    <h1>Formulário de produto</h1>
    <form action="alterar-produto.php" method="post">
        <table class="table">

        <?php include("formulario-base.php"); ?> 

        <input type="hidden" name="id" value="<?=$produto->getId()?>" />
        </table>
    </form>
<?php include("rodape.php"); ?>