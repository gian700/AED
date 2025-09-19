<?php
 /**
  * @author Giancarlo
 * Comprueba si un número es positivo, negativo o cero
 */
function Comprobacion(int $valor): string{
    $comprobado = "positivo";
    if ($valor == 0) {
        $comprobado = "0";
    }
    if ($valor < 0) {
        $comprobado = "negativo";
    }
    return $comprobado;
 }

 echo Comprobacion(0);
?>