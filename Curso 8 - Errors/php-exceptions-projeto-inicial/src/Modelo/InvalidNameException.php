<?php

namespace Alura\Banco\Modelo;
use DomainException;
class InvalidNameException extends DomainException{
    public function nameInvalid(){
        $string = 'O nome precisa ter mais de 5 caracteres';
        parent::__construct($string);
    }
}