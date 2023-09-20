<?php



    $string = <<<FINAL
    Uma linha
    Outra linha
    terceira linha
    FINAL;






    function geraEmail(string $nome): void{ //Posso usar com aspas simples nowdoc ou sem as aspas simples heredow, com corresponde as aspas simples normal, sem corresponde as aspas duplas!
        $conteudoDoEmail = <<<'FINAL'
        Olá, $nome!
        
        Estamos entrando em contato para
        {motivo do contato}

        {assinatura}
        FINAL;
        echo $conteudoDoEmail;
    }
    geraEmail("Hugo");






    function geraEmailNaoIndentado(): void{
        $conteudoDoEmail = 'Olá, Fulano(a)!
        Estamos entrando em contato para
        {motivo do contato}

        {assinatura}';
        echo $conteudoDoEmail;
    }
    geraEmailNaoIndentado();