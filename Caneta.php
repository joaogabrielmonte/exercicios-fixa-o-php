<?php

class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    var $carga;
    var $tampada;


    public function rabiscar () {
        if ($this->tampada == true) {
            echo " erro! nao posso raboscar";
        } else {
            echo "estou rabiscando...";
        }
    }


private function tampar () {
    $this->tampada = true;
}

private function destampar() {
    $this->tampada = false;
}

}