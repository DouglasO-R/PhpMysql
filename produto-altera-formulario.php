<?php 
include("cabecalho.php"); 
include("banco-categorias.php");
include("banco-produtos.php");

$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);


$usado = $produto["usado"] ? "checked = 'checked'" : ""; 

?>            
    <h1>Formulário de produto</h1>
    <form action="alterar-produto.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                    <td> 
                        <input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>">
                    </td>
            </tr>
            <tr>
                <td>Preço</td>
                    <td>
                        <input  class="form-control" type="number" name="preco" value="<?=$produto["preco"]?>">
                        <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    </td>
            </tr>
            <tr>
                <td>Descrição</td>
                    <td>
                        <textarea class="form-control" name="descricao" ><?=$produto["descricao"]?></textarea>
                    </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) :
                         $categoria_id = $produto['categoria_id'] == $categoria['id'];
                         $selecao = $categoria_id ? "selected='selected'" : "";
         
                        ?>
                        <option value="<?=$categoria['id']?> "<?=$selecao?>>
                                <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>