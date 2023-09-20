<?php
namespace Alura\Banco\Model\Employee;
use Alura\Banco\Model\Authenticable;
use Alura\Banco\Model\Employee\Employee;

class Manager extends Employee implements Authenticable{
    public function calculateBonus() : float {
        return $this->getSalary();
    }
    public function authenticate(string $password) : bool{
        return $password === '4321';
    }
}