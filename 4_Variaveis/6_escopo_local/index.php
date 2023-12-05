<?php

    $x = 10;

    echo "$x global <br>";

    function teste() {
        
        $x = 5;

        echo "$x <br>";
    }

    teste(); // chamando função

    function testando() {

        $x = 12;

        echo "$x local2 <br>";
    }

    testando();

    teste();

    echo "$x global <br>";
