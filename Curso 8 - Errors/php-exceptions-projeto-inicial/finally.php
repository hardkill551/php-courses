<?php

$archive = fopen('temp.txt', 'w');

try {
    fwrite($archive, 'test');
    //throw new Exception('Exception here');
    //fclose($archive);
} catch (\Throwable $th) {
    echo "Caindo no catch" . PHP_EOL;
    //fclose($archive);
} finally {
    echo "Finally" . PHP_EOL;
    fclose($archive);
}

a();
function ae(){
    try {
        echo 'Código' . PHP_EOL;
        throw new Exception('Problema');
        //return 0; está como comentário só para não ficar falando que está escrito errado
    } catch (\Throwable $th) {
        echo 'Problema' . PHP_EOL;
        return 1;
    } finally {
        echo 'Aqui vai ser executado mesmo que tenha 2 returns, no catch e no try!' . PHP_EOL;
    }
    echo 'Não chega aqui' . PHP_EOL;
}
