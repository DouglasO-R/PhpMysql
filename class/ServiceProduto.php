<?php 

class ServiceProduto implements IServiceProduto
{
	private $db;
	private $produto;

	public function __construct(IConn $db, IProduto $produto)
	{
		$this->db = $db->connect();
		$this->produto = $produto;
	}

	public function insereProduto()
	{
	    $query = "insert into produtos (nome, preco, descricao,categoria_id, usado) 
	    values ('{$this->produto->getNome()}', {$this->produto->getPreco()}, '{$this->produto->getDescricao()}',
	    {$this->produto->getCategoria()->getId()},{$this->produto->getUsado()})";  
	       
	    $stmt = $this->db->prepare($query);
	    $resultadoInsercao = $stmt->execute();
	    return $resultadoInsercao;
	}

	public function listaProdutos()
	{
	    $produtos = array();

	    $query = "select p.*, c.nome as categoria_nome from 
	    produtos as p join categorias as c on p.categoria_id = c.id";
	    $stmt = $this->db->prepare($query);
	    $stmt->execute();

	    while($produto_array = $stmt->fetch(\PDO::FETCH_ASSOC)){

	        $produto = new Produto();
	        $categoria = new Categoria();        
	        $categoria->setNome($produto_array["categoria_nome"]);

	        $produto->setId($produto_array['id'])		
	        		->setNome($produto_array['nome']) 
	        		->setPreco($produto_array['preco']) 
	        		->setDescricao($produto_array['descricao'])        
	        		->setCategoria($categoria)
	        		->setUsado($produto_array['usado']);

	        array_push($produtos, $produto);
	    }

	    return $produtos;
	}

	public function removeProduto()
	{
	   $query = "delete from produtos where id = :id";
	   $stmt = $this->db->prepare($query);
	   $stmt->bindValue(":id",$this->produto->getId());
	   $stmt->execute();
	}

	public function buscaProduto()
	{
	    $query = "select * from produtos where id = :id";
	    $stmt = $this->db->prepare($query);
	    $stmt->bindValue(":id",$this->produto->getId());
	    $stmt->execute();
	    $produto_buscado = $stmt->fetch(PDO::FETCH_ASSOC);

	    
	    $categoria = new Categoria();
	    $categoria->setId($produto_buscado['categoria_id']);

	    $produto = new Produto();
	    $produto->setId($produto_buscado['id']);
	    $produto->setNome($produto_buscado['nome']);
	    $produto->setDescricao($produto_buscado['descricao']);
	    $produto->setCategoria($categoria);
	    $produto->setPreco($produto_buscado['preco']);
	    $produto->setUsado($produto_buscado['usado']); 

	    return $produto;
	    
	}

	public function alterarProduto()
	{
	    $query = "update produtos set nome = :nome, preco = :preco, descricao = :descricao, 
	    categoria_id= :categoria, usado = :usado where id = :id'";
	    $stmt = $this->db->prepare($query);
	    $stmt->bindValue(":nome",$this->produto->getNome());
	    $stmt->bindValue(":preco",$this->produto->getPreco());
	    $stmt->bindValue(":descricao",$this->produto->getDescricao());
	    $stmt->bindValue(":categoria",$this->produto->categoria->getId());
	    $stmt->bindValue(":usado",$this->produto->getUsado());
	    $stmt->bindValue(":id",$this->produto->getId());

	    $alterar = $stmt->execute();
	    return $alterar;
	}
}
