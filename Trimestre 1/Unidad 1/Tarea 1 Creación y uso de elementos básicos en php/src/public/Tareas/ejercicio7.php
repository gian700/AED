<?php
 /**
  * Pide un número y genera su tabla de multiplicar del 1 al 10.
  * @param int $numero
  * @return void
  */
 function TablaMultiplicar(int $numero){
    for ($i=1; $i < 11; $i++) { 
        echo $i * $numero . "\n";
    }
 }

 TablaMultiplicar(8);
?>