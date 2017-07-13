<?php include("cabecalho.php") ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST['descricao'];


if (insereProduto($conexao,$nome,$preco,$descricao)) {?>
	<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> foi adicionado.</p>
<?php 
}else {
	$msg= mysqli_error($conexao)?>
		<p class="text-danger">Produto <?= $nome; ?>, <?= $preco; ?> não foi adicionado:<?=$msg?> </p>
<?php 
}
?>

			
<?php include("rodape.php") ?>