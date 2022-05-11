<?php

require_once 'Bebida.php';


class Vinho extends Bebida{

    private $safra;
    private $tipo;

    public function __construct($safra, $tipo, $nome, $preco){
        parent:: __construct($nome, $preco);
        $this->safra = $safra;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getSafra(){
        return $this->safra;
    }

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function mostrarBebida(){
        return 'Nome da bebida: ' . $this->nome . 'Preço da bebida: ' . $this->preco . 'Tipo: ' . $this->tipo . 'Safra: ' . $this->safra;
    }

    public function verificaPreco($preco){
        if($preco < 25){
            return true;
        }else{
            return false;
        }
    }
}

?>