<?php

namespace Alura\Banco\Model;

trait PropetyAcess{	
    public function __get($name): string {	
    $name = 'get' . ucfirst($name);
    return $this->$name();
}

public function __set(string $name, string $value):void {
    $name = 'set' . ucfirst($name);
    $this->$name($value);
}
}