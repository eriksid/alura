<?php include("cabecalho.php");
require_once 'logica-usuario.php';
?>
<?php if (isset($_GET['logado']) && $_GET['logado'] == 1 ){ ?>
    <p class="alert-success">Logado com sucesso</p>
<?php } ?>
<?php if (isset($_GET['logado']) && $_GET['logado'] == 0 ){ ?>
    <p class="alert-danger">Usuario ou senha invalido</p>
<?php } ?>
<?php if (isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca'] == true ){ ?>
    <p class="alert-danger">Você não tem acesso a está funcionalidade!</p>
<?php } ?>



    <h1>Bem vindo!</h1>
<?php if (usuarioEstaLogado()){
    ?>
    <p class="text-success">Você está logado como <?=usuarioLogado()?></p>
<?php }else{ ?>



<h2>LOGIN</h2>



<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td> <button class="btn btn-primary" type="submit">Login</button></td>
        </tr>
    </table>
</form>
<?php }?>
<?php include("rodape.php"); ?>
