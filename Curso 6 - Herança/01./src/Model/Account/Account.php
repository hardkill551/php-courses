<?php

namespace Alura\Banco\Model\Account;
use Alura\Banco\Model\Account\Customer;

abstract class Account {
    private Customer $customer;
    protected float $balance;
    private static $totalAccounts = 0;


    public function __construct( Customer $customer, float $balance = 0){
        $this->customer = $customer;
        $this->balance = $balance;
        self::$totalAccounts++;
    }

    public function __destruct(){
        self::$totalAccounts--;
            
    }



    public function withdraw(float $withdrawValue): void{
        $withdrawFee = $withdrawValue * $this->interest();
        $withdrawValue += $withdrawFee;

        if($withdrawValue > $this->balance){
            echo "Fundos insuficientes!";
            return;
        }
        $this->balance -= $withdrawValue;
        
    }

    public function deposit(float $depositValue): void{
        if($depositValue <= 0){
            echo "Digite um valor positivo e maior do que zero!";
            return;
        }
        $this->balance += $depositValue;
        
    }



    public function getBalance():float {
        return $this->balance;
    }
 
    public static function countAccount():int{
        return self::$totalAccounts;
    }
    public function getCpf():string{
        return $this->customer->getCpf();
    }
    
    public function getName():string{
        return $this->customer->getName();
    }
    abstract protected function interest():float;
}
