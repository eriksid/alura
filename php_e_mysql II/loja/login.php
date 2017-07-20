<?php
require_once ("conecta.php");
require_once ("banco-usuario.php");


$usuario = buscaUsuario($conexao,$_POST['email'] ,$_POST["senha"]);
if ($usuario == null){
    header("Location:index.php?logado=0");

}else{
    header("Location:index.php?logado=1");
}
die();