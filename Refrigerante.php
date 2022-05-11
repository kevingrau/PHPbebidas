<?php

require_once 'Bebida.php';


class Refrigerante extends Bebida{

    private $retornavel;

    public function __construct($retornavel, $nome, $preco){
        parent:: __construct($nome, $preco);
        $this->retornavel = $retornavel;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getRetornavel(){
        return $this->retornavel;
    }

    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida(){
        return 'Nome da bebida: ' . $this->nome . 'Preço da bebida: ' . $this->preco . 'Retornavel: ' . $this->retornavel;
    }

    public function verificaPreco($preco){
        if($preco < 2.5){
            return true;
        }else{
            return false;
        }
    }
}