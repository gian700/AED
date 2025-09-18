<?php
 /**
  * Calcula la suma de los números del 1 al 50 usando un bucle.
  * @return int
  */
 function sumaCalculada(): int{
    $numeroFinal = 0;
    for ($i=0; $i < 51; $i++) { 
        $numeroFinal += $i;
    }
    return $numeroFinal;
 }

 echo sumaCalculada();
?>