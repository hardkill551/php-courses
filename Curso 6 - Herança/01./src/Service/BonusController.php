<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Employee\Employee;

class BonusController{

    private float $bonusTotal = 0;
    public function addBonus(Employee $employee): void{
        $this->bonusTotal += $employee->calculateBonus();
    }

    public function getBonusTotal(): float{
        return $this->bonusTotal;
    }
}