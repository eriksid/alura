<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Categoria.php");
require_once("class/Produto.php");
verificaUsuario();
$categoria = new categoria;
$categoria->id =1;
$produto = new Produto();
$produto->categoria = $categoria;
var_dump($produto);
die();

$categorias = listaCategorias($conexao);

?>	

<h1>Formulário de produto</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		
		<?php include("produto-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>