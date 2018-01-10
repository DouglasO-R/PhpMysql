<?php

function insereProduto($conexao , $nome , $preco, $descricao, $categoria_id, $usado)
{
    $query = "insert into produtos (nome, preco, descricao,categoria_id, usado) 
    values ('{$nome}', {$preco}, '{$descricao}',{$categoria_id},{$usado})";  
       
    $stmt = $conexao->prepare($query);
    $resultadoInsercao = $stmt->execute();
    return $resultadoInsercao;
}

function listaProdutos($conexao)
{
    $query = "select p.*, c.nome as categoria_nome from 
    produtos as p join categorias as c on p.categoria_id = c.id";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $produtos = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $produtos;
}

function removeProduto($conexao , $id)
{
   $query = "delete from produtos where id = {$id}" ;
   $stmt = $conexao->prepare($query);
   $stmt->execute();
}

function buscaProduto($conexao, $id)
{
    $query = "select * from produtos where id = {$id}";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function alterarProduto($conexao ,$id,  $nome , $preco, $descricao, $categoria_id, $usado)
{
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
    categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";

    $stmt = $conexao->prepare($query);
    $alterar = $stmt->execute();
    return $alterar;
}