<?php

declare(strict_types=1);

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: r$ '. $this->saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Deposito no valor de R$: '. $valor. ' Realizado';
    }

    public function saque(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque no valor de R$: '. $valor. ' Realizado';
    }

}

$conta = new contaBancaria
(
    'Banco do Brasil',
    'Braulio Santos',
    '874-1',
    '30643-7',
    1000.00
);

//var_dump ($conta);

echo ($conta->obterSaldo());

echo PHP_EOL;
echo $conta->depositar(200);

echo PHP_EOL;
print_r ($conta->obterSaldo());

echo PHP_EOL;
echo $conta->saque(100);

echo PHP_EOL;
print_r ($conta->obterSaldo());

