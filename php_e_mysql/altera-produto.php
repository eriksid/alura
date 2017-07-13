<?php include("cabecalho.php") ?>
<?php include("conecta.php"); ?>

<?php include("banco-produto.php");

$nome = $_POST["nome"];
$id = $_POST['id'];
$preco = $_POST["preco"];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if (array_key_exists('usado',$_POST)){
    $usado = "true";
}else{
    $usado = "false";
}




if (alteraProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado,$id)) {?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> foi alterado.</p>
    <?php
}else {
    $msg= mysqli_error($conexao)?>
    <p class="text-danger">Produto <?= $nome; ?>, <?= $preco; ?> não foi alterado:<?=$msg?> </p>
    <?php
}
?>


<?php include("rodape.php") ?>