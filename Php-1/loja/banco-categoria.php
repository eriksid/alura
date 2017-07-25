<?php
require_once("conecta.php");
require_once("class/categoria.php");


function listaCategorias($conexao) {

	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($conexao, $query);

	while($categoriaArray = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria();
		$categoria->id = $categoriaArray['id'];
		$categoria->nome = $categoriaArray['nome'];

	    array_push($categorias, $categoria);
	}

	return $categorias;
}