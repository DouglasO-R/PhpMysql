<?php

function listaCategorias($conexao){
    
    $query = "select * from categorias";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $categorias = $stmt->fetchALL();
    return $categorias;
}