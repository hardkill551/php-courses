<?php

class Conta1 {
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
    private string $notError;
    public function __construct(string $notError) {
        $this->notError = $notError;
    }
    public function sacar(float $valorASacar){
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
        
    }
    public function depositar(float $valorADepositar): void{
        if($valorADepositar <= 0){
            echo "Digite um valor positivo e maior do que zero!";
            return;
        }
        $this->saldo += $valorADepositar;
        
    }
    public function transferir(float $valorAtransferir, Conta1 $contaDestino) : void {
        if($valorAtransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorAtransferir);
        $contaDestino->depositar($valorAtransferir);
        
    }
}