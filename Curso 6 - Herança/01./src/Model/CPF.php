<?php

namespace Alura\Banco\Model;

final class CPF {
    private string $cpf;

    public function __construct(string $cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf():string{
        return $this->cpf;
    }
}