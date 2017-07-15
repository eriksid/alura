<?php
namespace App\controller;
Class ProdutosController extends AppController{

    public function index(){
        $msg = "Bem vindo ao Cake Php(mensagem do controller";
        $this->set('msg',$msg);

    }
}