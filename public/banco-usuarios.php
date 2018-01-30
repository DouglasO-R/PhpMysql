<?php

function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $usuario = $stmt->fetch();
    return $usuario;
}