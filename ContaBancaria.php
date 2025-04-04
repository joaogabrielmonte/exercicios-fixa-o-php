<?php

class ContaBancaria
{

    private $banco;

    private $nomeTitular ;

    private $numeroAgencia ;

    private $numeroConta;

    private $saldo;

    public function __construct(
         $banco,
         $nomeTitular,
         $numeroAgencia,
         $numeroConta,
         $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
    public function obterSaldo()

    {
        return 'Seu saldo Atual é de R$ '.  $this->saldo . ' Reais';
    }

    public function Depositar($valor)
    {
        $this->saldo += $valor;
        return 'deposito de R$' . $valor . ' feito com sucesso';
    }

    public function Saque($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . ' feito com sucesso';
    }
}

$conta = new ContaBancaria(
    'banco do brasil',
    'jao kaakaa',
    '9922',
    '5118990',
    0
);


echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;

echo  $conta->obterSaldo();

echo PHP_EOL;

echo $conta->Saque(140.00);

echo PHP_EOL;

echo $conta->obterSaldo();
