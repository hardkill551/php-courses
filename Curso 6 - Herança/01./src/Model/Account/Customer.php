<?php

namespace Alura\Banco\Model\Account;
use Alura\Banco\Model\Authenticable;
use Alura\Banco\Model\Person;
use Alura\Banco\Model\Address;
use Alura\Banco\Model\CPF;


class Customer extends Person implements Authenticable{

    public function authenticate(string $password) : bool{
        return $password === 'abcd';
    }
    private Address $address;

    public function __construct(string $name, CPF $cpf, Address $address) {
        parent::__construct($name, $cpf);
        $this->address = $address;

    }
    

	public function getAddress(): Address {
		return $this->address;
	}
}