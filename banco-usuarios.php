<?php

function buscaUsuario($conexao, $email, $senha){
    $senha = md5($senha);
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senha}'";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $usuario = $stmt->fetch();
    return $usuario;
}