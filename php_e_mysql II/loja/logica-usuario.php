<?php
session_start();
function usuarioEstaLogado(){
    return isset($_SESSION['usuario_logado']);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Você não tem acesso a está funcionabilidade!";
        header("Location:index.php");
        die();
    }
}

function usuarioLogado(){
    return $_SESSION['usuario_logado'];
}

function logar($usuario){
    $_SESSION["usuario_logado"] = $usuario;
}
function logout(){
    session_destroy();
    session_start();
}

