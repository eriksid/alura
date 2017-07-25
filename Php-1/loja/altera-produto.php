<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("class/Produto.php");
require_once("class/categoria.php");

$produto = new Produto();

$categoria = new Categoria();
$produto->id = $_POST['id'];
$produto->nome = $_POST['nome'];
$produto->preco = $_POST['preco'];
$produto->descricao = $_POST['descricao'];

$categoria->id = $_POST['categoria_id'];

$produto->categoria = $categoria;

if(array_key_exists('usado', $_POST)) {
    $produto->usado = "true";
} else {
    $produto->usado = "false";
}

$produto->categoria->id = $_POST['categoria_id'];

if(alteraProduto($conexao,$produto)) { ?>
	<p class="text-success">O produto <?= $produto->nome ?>, <?= $produto->preco ?> foi alterado.</p>

} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->nome ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>