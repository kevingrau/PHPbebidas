<?php

require_once 'Bebida.php';


class Suco extends Bebida{

    private $sabor;

    public function __construct($sabor, $nome, $preco){
        parent:: __construct($nome, $preco);
        $this->sabor = $sabor;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function mostrarBebida(){
        return 'Nome da bebida: ' . $this->nome . 'Preço da bebida: ' . $this->preco . 'Sabor: ' . $this->sabor;
    }

    public function verificaPreco($preco){
        if($preco < 5){
            return true;
        }else{
            return false;
        }
    }
}