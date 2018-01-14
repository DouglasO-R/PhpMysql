<?php 
require_once ("cabecalho.php"); 


$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);


$usado = $produto["usado"] ? "checked = 'checked'" : ""; 

verificaLogado();

?>            
    <h1>Formulário de produto</h1>
    <form action="alterar-produto.php" method="post">
        <table class="table">

        <?php include("formulario-base.php"); ?> 

        <input type="hidden" name="id" value="<?=$produto['id']?>" />
        </table>
    </form>
<?php include("rodape.php"); ?>