<?php

function verificaUsuario(){
    if(!isset($_COOKIE['usuario_logado'])){
        header("Location:index.php?falhaDeSeguranca=true");
        die();
    }
}