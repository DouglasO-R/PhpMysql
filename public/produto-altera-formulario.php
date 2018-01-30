<?php 

namespace Source;

require_once "cabecalho.php"; 

 

$produtoA = new Produto();
$produtoA->setId($_GET["id"]);

$serviceP = new ServiceProduto($conexao,$produtoA);
$produto = $serviceP->buscaProduto();

$categoria = new Categoria();
$serviceC = new ServiceCategoria($conexao,$categoria);

$categorias = $serviceC->listaCategorias();


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