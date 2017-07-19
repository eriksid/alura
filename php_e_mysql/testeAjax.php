<?php
require_once("banco-produto.php");
require_once("conecta.php");

header('content_Type'."text/plain");

$produtos = listaProdutos($conexao);

echo json_encode($produtos,JSON_PRETTY_PRINT);
?>

