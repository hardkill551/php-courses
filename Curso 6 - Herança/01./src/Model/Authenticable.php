<?php

namespace Alura\Banco\Model;
interface Authenticable{
    public function authenticate(string $password) : bool;

}