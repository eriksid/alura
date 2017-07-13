<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categorias.php"); ?>
<?php include("banco-produto.php"); ?>
<?php $categorias = listaCategorias($conexao);
$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$usado = $produto['usado'] ? "checked = 'checked'" :"";
?>

<h1>Alterando Produto</h1>

<form action="altera-produto.php" method="post">
    <table class="table">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <tr>
            <td>Nome</td>
            <td ><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td ><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br></td>
        </tr>

        <td>Descricao</td>
        <td><textarea  class="form-control" name="descricao" ><?=$produto['descricao']?></textarea> <br></td>
        </tr>
        <tr>
            <td></td>
            <td><input  name="usado" type="checkbox" <?=$usado?> value="true">usado
            </td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class="form-control">
                    <?php foreach ($categorias as $categoria):
                        $essaEhAcategoria = $produto['categoria_id'] == $categoria['id'];

                        $selecao = $essaEhAcategoria ? "selected='selected'":"";
                        ?>

                        <option value="<?=$categoria['id'] ?>" <?= $selecao?>> <?=$categoria['nome']?></option>

                    <?php endforeach ?>
                </select>

            </td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
        </tr>
    </table>
</form>
<?php include("rodape.php") ?>
