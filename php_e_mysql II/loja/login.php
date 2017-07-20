<?php
require_once ("conecta.php");
require_once ("banco-usuario.php");


$usuario = buscaUsuario($conexao,$_POST['email'] ,$_POST["senha"]);
if ($usuario == null){
    echo("login ou senha invalida");

}else{
    echo("logado");
}