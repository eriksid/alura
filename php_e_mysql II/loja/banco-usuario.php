<?php
require_once 'conecta.php';
function buscaUsuario($conexao,$email,$senha){
    $email= mysqli_real_escape_string($email);
    $senhaMd5 = md5($senha);
    $sql = "select * from usuarios WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);

}