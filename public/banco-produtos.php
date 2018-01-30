<?php


function insereProduto($conexao ,$produto)
{
    $query = "insert into produtos (nome, preco, descricao,categoria_id, usado) 
    values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}',
    {$produto->categoria->id},{$produto->usado})";  
       
    $stmt = $conexao->prepare($query);
    $resultadoInsercao = $stmt->execute();
    return $resultadoInsercao;
}

function listaProdutos($conexao)
{
    $produtos = array();

    $query = "select p.*, c.nome as categoria_nome from 
    produtos as p join categorias as c on p.categoria_id = c.id";
    $stmt = $conexao->prepare($query);
    $stmt->execute();

    while($produto_array = $stmt->fetch(\PDO::FETCH_ASSOC)){

        $produto = new Produto();
        $categoria = new Categoria();        
        $categoria->nome = $produto_array["categoria_nome"];

        $produto->id = $produto_array['id'];
        $produto->nome = $produto_array['nome'];
        $produto->preco = $produto_array['preco'];
        $produto->descricao = $produto_array['descricao'];        
        $produto->categoria = $categoria;
        $produto->usado = $produto_array['usado'];

        array_push($produtos, $produto);
    }

    return $produtos;
}

function removeProduto($conexao , $produto)
{
   $query = "delete from produtos where id = {$produto->id}" ;
   $stmt = $conexao->prepare($query);
   $stmt->execute();
}

function buscaProduto($conexao, $id)
{
    $query = "select * from produtos where id = {$id}";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $produto_buscado = $stmt->fetch(PDO::FETCH_ASSOC);

    
    $categoria = new Categoria();
    $categoria->id = $produto_buscado['categoria_id'];

    $produto = new Produto();
    $produto->id = $produto_buscado['id'];
    $produto->nome = $produto_buscado['nome'];
    $produto->descricao = $produto_buscado['descricao'];
    $produto->categoria = $categoria;
    $produto->preco = $produto_buscado['preco'];
    $produto->usado = $produto_buscado['usado'];

    return $produto;
    
}

function alterarProduto($conexao ,$produto)
{
    $query = "update produtos set nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', 
    categoria_id= {$produto->categoria->id}, usado = {$produto->usado} where id = '{$produto->id}'";

    $stmt = $conexao->prepare($query);
    $alterar = $stmt->execute();
    return $alterar;
}