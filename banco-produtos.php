<?php

function insereProduto($conexao ,$produto)
{
    $query = "insert into produtos (nome, preco, descricao,categoria_id, usado) 
    values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}',{$produto->categoria_id},{$produto->usado})";  
       
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
    $produtos = $stmt->fetchALL(PDO::FETCH_OBJ);
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
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function alterarProduto($conexao ,$produto)
{
    $query = "update produtos set nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', 
    categoria_id= {$produto->categoria_id}, usado = {$produto->usado} where id = '{$produto->id}'";

    $stmt = $conexao->prepare($query);
    $alterar = $stmt->execute();
    return $alterar;
}