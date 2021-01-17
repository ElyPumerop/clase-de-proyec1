<?php

    include_once 'Calculador.php';

    $calculadora = new Calculador(18,20);

    $resultado = $calculadora->sumar();
    
    echo $resultado;

?>