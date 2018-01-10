<?php
include_once "cabecalho.php";  
include_once "banco-categorias.php";  
$categorias = listaCategorias($conexao);
?>
<html>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control" /></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" name="preco" class="form-control" /></td>
            </tr>

            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" value="true"> Usado</td>
            </tr>

            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id">
                    <?php foreach($categorias as $categoria) : ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                    <?php endforeach ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Cadastrar" /></td>
            </tr>           

        </table>

    </form>
</html>

<?php
include_once "rodape.php";  
?>