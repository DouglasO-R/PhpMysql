<?php

function listaCategorias($conexao){
    $categorias = array();
    $query = "select * from categorias";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
     

    while ($categoria_array = $stmt->fetch()) {

        $categoria = new Categoria();
        $categoria->id = $categoria_array['id'];
        $categoria->nome = $categoria_array['nome'];

        array_push($categorias, $categoria);

    
    }
    return $categorias;
}