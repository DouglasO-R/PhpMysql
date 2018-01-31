<?php
include_once "cabecalho.php"; 




Alerta("danger");
Alerta("success");

//$produto = $container['produto'];
//$serviceP = new ServiceProduto($conexao,$produto);

$Produtos = $container['ServiceProduto']->listaProdutos();

?>


<table class="table table-striped table-bordered">

<?php
foreach($Produtos as $produto) {
?>

    <tr>
        <td><?= $produto->getNome() ?></td>
        <td><?= $produto->getPreco() ?></td>
        <td><?= substr($produto->getDescricao(), 0, 15) ?></td>
        <td><?= $produto->getCategoria()->getNome() ?></td>
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->getId()?>">alterar</a>

        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto->getId()?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>       
    </tr>

<?php
}
?>
</table>
