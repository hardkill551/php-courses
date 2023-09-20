<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\PropetyAcess;

class Person{
    
    use PropetyAcess;
    private string $name;
    private CPF $cpf;
    
    public function __construct(string $name, CPF $cpf) {
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getCpf():string{
        return $this->cpf->getCpf();
    }
    
    public function getName():string{
        return $this->name;
    }
    protected function validateCustomerName(string $nameTitular)
    {
        if (strlen($nameTitular) < 5) {
            echo "name precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}