<?php

    $pessoa = [
        'nome' => 'Diego',
        'idade' => 31,
        'peso' => 85.5,
        'trabalha' => true
    ];

    if($pessoa['idade'] > 17){
        $nome = $pessoa['nome'];
        $idade = $pessoa['idade'];
        $peso = $pessoa['peso'];

        echo "$nome é maior de idade. 
        Ele tem $idade anos, pesa $peso kg.
        ";
    }

