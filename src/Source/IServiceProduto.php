<?php

namespace Source;

interface IServiceProduto
{
	public function insereProduto();

	public function listaProdutos();
	public function removeProduto();

	public function buscaProduto();

	public function alterarProduto();
}
