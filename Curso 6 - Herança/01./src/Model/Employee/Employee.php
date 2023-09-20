<?php

namespace Alura\Banco\Model\Employee;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Person;

abstract class Employee extends Person
{
   
    private float $salary;
    public function __construct(string $name, CPF $cpf, float $salary) {
		parent::__construct($name, $cpf);
        $this->salary = $salary;

    }

	public function setName(string $name):void{
		$this->validateCustomerName($name);
        $this->$name = $name;
    }


    protected function salaryIncrease(float $increaseValue):void{
        if($increaseValue < 0){
            echo "O valor não pode ser negativo";
            return;
        }
        $this->salary += $increaseValue;
    }
	public function getSalary(): float {
		return $this->salary;
	}
    abstract public function calculateBonus(): float;
}