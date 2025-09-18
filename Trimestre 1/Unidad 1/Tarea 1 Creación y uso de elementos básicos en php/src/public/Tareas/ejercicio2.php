<?php
/**
 * Pide una edad, y revisa si la persona es mayor de edad
 */
function MayorEdad(int $edad): string{
    if ($edad >= 18) {
        return "Eres mayor de edad";
    }
    return "Eres menor de edad";
 }

 echo MayorEdad(18);
?>