<?php
namespace App\controller;
use Cake\ORM\TableRegistry;

Class ProdutosController extends AppController{

    public function index(){

    $produtosTable = TableRegistry::get('Produtos');
    $produtos =$produtosTable->find('all');
    $this->set('produtos',$produtos);

    }
}