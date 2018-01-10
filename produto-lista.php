<?php
include_once "cabecalho.php"; 
include_once "banco-produtos.php";

$Produtos = listaProdutos($conexao);

?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
<p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>


<table class="table table-striped table-bordered">

<?php
foreach($Produtos as $produto) {
?>

    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 15) ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto["id"]?>">alterar</a>

        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>       
    </tr>

<?php
}
?>
</table>
