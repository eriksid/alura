<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php
if (array_key_exists("removido",$_GET)&& $_GET['removido']){
 ?>
    <p class="alert-success">produto removido com sussesso.<p>
        <?php
}
?>

<table class="table table-striped table-bordered">
	<?php 


	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) :
		?>
		<tr>
	 		<td><?=$produto['nome']?></td>
	 		<td><?=$produto['preco']?></td>
	 		<td><?=substr($produto['descricao'],0,40)?></td>
            <td><?= $produto['categoria_nome']?></td>
            <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
            <td><button class="btn btn-danger">remover</button></td>
            </form>
        </tr>
	 <?php 
		endforeach

	?>
</table>

<?php include("rodape.php"); ?>