<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categorias.php"); ?>
<?php $categorias = listaCategorias($conexao);?>

			<h1>Formulário de cadastro</h1>

			<form action="adciona-produto.php" method="post">
			<table class="table">
				<tr>
					<td>Nome</td>
					<td ><input class="form-control" type="text" name="nome"><br></td>
				</tr>
				<tr>
					<td>Preço</td>
					<td ><input class="form-control" type="number" name="preco"><br></td>
				</tr>

					<td>Descricao</td>
					<td><textarea  class="form-control" name="descricao"></textarea> <br></td>
				</tr>
                <tr>
                    <td></td>
                    <td><input  name="usado" type="checkbox" value="true">usado
                    </td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria):?>

                                <option value="<?=$categoria['id'] ?>"><?=$categoria['nome']?></option>

                        <?php endforeach ?>
                            </select>
                    </td>
                </tr>
				<tr>
				<td><input class="btn btn-primary" type="submit" value="cadastrar"></td>
				</tr>
			</table>
			</form>
<?php include("rodape.php") ?>
