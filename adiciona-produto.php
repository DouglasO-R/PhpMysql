<?php
   include_once "cabecalho.php";
 
   verificaLogado();

    $produto = new Produto();
    $categoria = new Categoria();
    $categoria->id = $_POST["categoria_id"];

    $produto->nome = $_POST["nome"];
    $produto->preco = $_POST["preco"];
    $produto->descricao = $_POST["descricao"];
    $produto->categoria = $categoria;
    $produto->usado = $_POST["usado"];

    if(array_key_exists('usado',$_POST)){
        $produto->usado = "true";
    } else {
        $produto->usado = "false";
    }

if(insereProduto($conexao, $produto)) {
?>
<p class="alert-success">Produto <?= $produto->nome; ?>, <?= $produto->preco; ?> adicionado com sucesso!</p>
<?php
} else {
?>
<p class="alert-danger">O produto <?= $produto->nome; ?> não foi adicionado</p>
<?php
}
?>
    