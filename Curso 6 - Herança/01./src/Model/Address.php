<?php

namespace Alura\Banco\Model;



/**
 * @property string $city
 * @property string $neighborhood
 * @property string $street
 * @property string $number
 */
final class Address{
    private string $city;
    private string $neighborhood;
    private string $street;
    private string $number;

    public function __construct(string $city, string $neighborhood, string $street, string $number) {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
    }

	public function getNumber(): string {
		return $this->number;
	}
	
	public function setNumber(string $number): self {
		$this->number = $number;
		return $this;
	}

	public function getStreet(): string {
		return $this->street;
	}
	
	public function setStreet(string $street): self {
		$this->street = $street;
		return $this;
	}

	public function getNeighborhood(): string {
		return $this->neighborhood;
	}
	
	public function setNeighborhood(string $neighborhood): self {
		$this->neighborhood = $neighborhood;
		return $this;
	}

	public function getCity(): string {
		return $this->city;
	}
	

	public function setCity(string $city): self {
		$this->city = $city;
		return $this;
	}

	public function __toString(): string {
		return "{$this->street}, {$this->number}, {$this->neighborhood}, {$this->city}";
	}
	


}