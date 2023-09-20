<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\InsufficientFundsException;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $withdrawValue = $valorASacar + $tarifaSaque;
        if ($withdrawValue > $this->saldo) {
            throw new InsufficientFundsException($withdrawValue, $this->saldo);
        }

        $this->saldo -= $withdrawValue;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException('Não é possível depositar um valor negativo');
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
