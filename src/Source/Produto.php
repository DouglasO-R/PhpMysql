<?php

namespace Source;

class Produto implements IProduto
{
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $categoria;
    private $usado;


    public function getId()
    {
    	return $this->id;
    }
    public function setId($id)
    {
    	$this->id = $id;
    	return $this;
    }


    public function getNome()
    {
    	return $this->nome;
    }
    public function setNome($nome)
    {
    	$this->nome = $nome;
    	return $this;
    }

    public function getPreco()
    {
    	return $this->preco;
    }
    public function setPreco($preco)
    {
    	$this->preco = $preco;
    	return $this;
    }

    public function getDescricao()
    {
    	return $this->descricao;
    }
    public function setDescricao($descricao)
    {
    	$this->descricao = $descricao;
    	return $this;
    }

    public function getCategoria()
    {
    	return $this->categoria;
    }
    public function setCategoria($categoria)
    {
    	$this->categoria = $categoria;
    	return $this;
    }

    public function getUsado()
    {
    	return $this->usado;
    }
    public function setUsado($usado)
    {
    	$this->usado = $usado;
    	return $this;
    }
}