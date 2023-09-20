<?php

namespace Alura\Banco\Model\Account;
use Alura\Banco\Model\Account\Account;

class CurrentAccount extends Account{
    protected function interest():float{
        return 0.05;
    }

    public function transfer(float $transferValue, Account $targetAccount) : void {

        if($transferValue > $this->balance){
            echo "Saldo indisponível";
            return;
        } 
        $this->withdraw($transferValue);
        $targetAccount->deposit($transferValue);
        
    }
}