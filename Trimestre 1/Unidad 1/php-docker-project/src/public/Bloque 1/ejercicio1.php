<?php
/**
 * @author Giancarlo
 * Pide dos números y muestra cuál es mayor o si son iguales.
 */
 function Comparar(int $numero1, int $numero2){
    if ($numero1 == $numero2) {
        return "Ambos numeros son iguales";
    }
    if ($numero1 > $numero2) {
        return $numero1;
    }
    return $numero2;
 }

 echo Comparar(1,5);
?>