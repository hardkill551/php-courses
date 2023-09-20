<?php

namespace Alura\Banco\Service;
use Alura\Banco\Model\Authenticable;
use Alura\Banco\Model\Employee\Director;
use Manager;

class Authenticator{
    public function authenticate(Authenticable $authenticable, string $password) : void{
        if($authenticable->authenticate($password)){
            echo "Ok! User authenticated" . PHP_EOL;
            return;
        }
        echo 'Incorrect password' . PHP_EOL;
    }
}