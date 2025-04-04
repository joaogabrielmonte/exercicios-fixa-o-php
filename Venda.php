<?php

class Venda
{
        private $data;
        private $produto;
        private $quantidade;
        private $valorTotal;

        public function __construct($data, $produto, $quantidade, $valorTotal)
        {
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorTotal = $valorTotal;

        }

        public function obterVenda()
        {

        }


}

$vendas = new Venda(
    '06/07/2003',
    'casa',
    '2',
    200
);

echo $vendas->obterVenda();