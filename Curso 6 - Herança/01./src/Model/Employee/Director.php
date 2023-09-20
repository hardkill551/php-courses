<?php
namespace Alura\Banco\Model\Employee;
use Alura\Banco\Model\Authenticable;
use Alura\Banco\Model\Employee\Employee;

class Director extends Employee implements Authenticable{
    public function calculateBonus() : float {
        return $this->getSalary() * 2;
    }

    public function authenticate(string $password) : bool{
        return $password === '1234';
    }
}