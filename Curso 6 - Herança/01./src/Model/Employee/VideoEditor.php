<?php
namespace Alura\Banco\Model\Employee;
use Alura\Banco\Model\Employee\Employee;

class VideoEditor extends Employee{
    public function calculateBonus() : float {
        return 600;
    }
}