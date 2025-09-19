<?php
 /**
  * @author Giancarlo
  * Haz un bucle que cuente de 10 a 1 y luego muestre "¡Fin!"
  * @return string
  */
 function cuentaAtras(): String{
    for ($i=10; $i > 0; $i--) { 
        echo $i . "\n";
    }
    return "¡Fin!";
 }

 echo cuentaAtras();
?>