<?php
 /**
  * Muestra todos los números pares entre 1 y 50.
  * @return void
  */
 function numerosPares(){
    for ($i=2; $i < 51; $i++) { 
        echo $i . "\n";
        $i++;
    }
 }

 numerosPares();
?>