<?php

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;

    public  function precoComDesconto($valor = 0.1){

        $this->preco -= $this->preco * $valor;
        return $this->preco;
}
}

?>