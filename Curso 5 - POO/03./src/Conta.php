<?php

class Conta {
    private Cliente $titular;
    private float $saldo;
    private static $numeroDeContas = 0;



    public function __construct( Cliente $titular, float $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        self::$numeroDeContas++;
    }

    public function __destruct(){
        self::$numeroDeContas--;
            
    }



    public function sacar(float $valorASacar): void{
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

    public function transferir(float $valorAtransferir, Conta $contaDestino) : void {
        if($valorAtransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        } 
        $this->sacar($valorAtransferir);
        $contaDestino->depositar($valorAtransferir);
        
    }

    public function getSaldo():float {
        return $this->saldo;
    }
 
    public static function numeroDeContas():int{
        return self::$numeroDeContas;
    }

}