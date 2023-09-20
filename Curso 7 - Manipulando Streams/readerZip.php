<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '91122324'
    ]
    ]);
echo file_get_contents('zip://archive.zip#courses-list.txt', false ,$contexto);
