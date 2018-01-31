<?php

namespace Source;

$container['conn'] = function ($c){
    return new \Source\Conn($c['tipo'], $c['host'], $c['dbname'], $c['user'], $c['pass']);
};

$container['produto'] = function(){
    return new \Source\Produto();
};

$container['categoria'] = function(){
    return new \Source\Categoria();
};

$container['usuario'] = function(){
    return new \Source\Usuario();
};

$container['ServiceProduto'] = function($c){
    return new \Source\ServiceProduto($c['conn'], $c['produto']);
};

$container['ServiceCategoria'] = function($c){
    return new \Source\ServiceCategoria($c['conn'], $c['categoria']);
};

$container['ServiceUsuario'] = function($c){
    return new \Source\ServiceUsuario($c['conn'], $c['usuario']);
};