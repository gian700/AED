<?php
    include "ejercicio16.php";
    /**
     * @author Giancarlo
     * Da el MCD de dos valores
     * @param int $valor1
     * @param int $valor2
     */
    function mcd(int $valor1, int $valor2){
        $divisoresDeValor1 = divisores($valor1);
        $divisoresDeValor2 = divisores($valor2);
        $arrayFinal = array_intersect($divisoresDeValor1, $divisoresDeValor2);
        return $arrayFinal[0];
    }

    echo mcd(100,500);
?>