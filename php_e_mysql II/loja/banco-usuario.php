<?php
function buscaUsuario($conexao,$email,$senha){

    $senhaMd5 = md5($senha);
    $sql = "select * from usuarios WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);

}