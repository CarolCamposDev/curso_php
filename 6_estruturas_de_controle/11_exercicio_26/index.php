<?php

    $velocidade = 40;

    if($velocidade < 40){

        echo "O motorista está na velocidade correta";

    } else if($velocidade == 40){

        echo "Atenção! Limite de velocidade";

    } else {

        echo "Você foi multado por tráfegar a mais de 40km/h";
    }