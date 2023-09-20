<?php

namespace Alura\Banco\Model\Account;
use Alura\Banco\Model\Account\Account;

class SavingAccount extends Account{
    protected function interest():float{
        return 0.03;
    }
}