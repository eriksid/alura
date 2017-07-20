<?php include("cabecalho.php"); ?>			

    <h1>Bem vindo!</h1>
    <h2>LOGIN</h2>

<?php if (isset($_GET['logado']) && $_GET['logado'] == 1 ){ ?>
<p class="alert-success">Logado com sucesso</p>
<?php } ?>
<?php if (isset($_GET['logado']) && $_GET['logado'] == 0 ){ ?>
<p class="alert-danger">Usuario ou senha invalido</p>
<?php } ?>
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
<?php include("rodape.php"); ?>			
