<?php
namespace Alura\Banco\Model\Employee;
use Alura\Banco\Model\Employee\Employee;

class Developer extends Employee{
    public function upgradeLevel(){
        $this->salaryIncrease($this->getSalary() * 0.75);
    }
    public function calculateBonus() : float {
        return 500;
    }
}