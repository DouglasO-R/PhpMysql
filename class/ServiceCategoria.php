<?php

class ServiceCategoria implements IServiceCategoria
{
	private $db;
	private $categoria;

	public function __construct(IConn $db, ICategoria $categoria)
	{
		$this->db = $db->connect();
		$this->categoria = $categoria;
	}


	function listaCategorias(){
	    $categorias = array();
	    $query = "select * from categorias";
	    $stmt = $this->db->prepare($query);
	    $stmt->execute();
     

	    while ($categoria_array = $stmt->fetch()) {

	        $categoria = new Categoria();
	        $categoria->setId($categoria_array['id']) ;
	        $categoria->setNome($categoria_array['nome']);

	        array_push($categorias, $categoria);

		    
		}
			return $categorias;
	}
}
