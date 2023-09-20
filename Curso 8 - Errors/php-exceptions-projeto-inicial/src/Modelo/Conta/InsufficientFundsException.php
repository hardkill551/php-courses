<?php

namespace Alura\Banco\Modelo\Conta;
use DomainException;
class InsufficientFundsException extends DomainException{
    public function __construct(float $withdrawValue, float $saldo) {
        $message = "Você tentou sacar $withdrawValue, mas seu saldo é $saldo";
        parent::__construct($message);
    }
}