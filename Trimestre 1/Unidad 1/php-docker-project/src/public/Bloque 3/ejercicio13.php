<?php
 /**
  * @author Giancarlo
  * Pide un número n y muestra sus múltiplos hasta 100.
  * @param int $valor
  * @return array
  */
 function multiplo(int $valor): array{
    $numeros = [];
    if ($valor <= 0 || $valor > 100) {
        return $numeros;
    }
    $resultado = 0;
    $multiplicar = 1;
    while ($resultado <= 100) {
        $resultado = $multiplicar * $valor;
        if ($resultado > 100) {
            return $numeros;
        }
        array_push($numeros, $resultado);
        $multiplicar++;
    }
    return $numeros;
 }

 $numeros = multiplo(-2);
 foreach ($numeros as $key => $value) {
    echo $value . "\n";
 }
?>