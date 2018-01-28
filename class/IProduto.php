<?php

interface IProduto
{
	public function getId(); 
    public function setId($id);


    public function getNome();
    public function setNome($nome);

    public function getPreco();
    public function setPreco($preco);

    public function getDescricao();
    public function setDescricao($descricao);

    public function getCategoria();
    public function setCategoria($categoria);

    public function getUsado();
    public function setUsado($usado);
}