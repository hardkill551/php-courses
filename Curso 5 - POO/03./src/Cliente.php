<?php

class Cliente {
    private Cpf $cpf;
    private string $nome;


    public function __construct(Cpf $cpf, string $nome) {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;

    }
    
	public function getCpf(): string {
		return $this->cpf->getCpf();
	}

	public function getNome(): string {
		return $this->nome;
	}
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}