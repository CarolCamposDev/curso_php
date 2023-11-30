<?php

    $pessoa = [
        'Nome' => 'Maria', 
        'Idade' => 18, 
        'Altura' => 1.60, 
        'Signo' => 'Áries'
    ];

    if($pessoa['Idade'] >= 18) {
        echo "É maior de idade!";
    } else {
        echo "Menor de idade";
    }

