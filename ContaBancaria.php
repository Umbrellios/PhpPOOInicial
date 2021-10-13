<?php

class ContaBancaria
{

    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;


    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: r$ '. $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Deposito no valor de R$: '. $valor. ' Realizado';
    }

    public function saque($valor)
    {
        $this->saldo -= $valor;
        return 'Saque no valor de R$: '. $valor. ' Realizado';
    }

}

$conta1 = new contaBancaria
(
    'Banco do Brasil',
    'Braulio Santos',
    '874-1',
    '30643-7',
    1000.00
);

$conta2 = new contaBancaria
(
    'Banco do Brasil',
    'Braulio Santos',
    '874-1',
    '30643-7',
    1000.00
);

var_dump ($conta1);
var_dump ($conta2);
//echo ($conta->obterSaldo());
//
//echo PHP_EOL;
//echo $conta->depositar(200);
//
//echo PHP_EOL;
//print_r ($conta->obterSaldo());
//
//echo PHP_EOL;
//echo $conta->saque(100);
//
//echo PHP_EOL;
//print_r ($conta->obterSaldo());

