<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal!";
        }
        
    }

    $carolina = new Pessoa();

    $carolina -> nome = "Carolina";

    echo $carolina->nome;

    echo "<br>";

    $carolina->falar();

