<?php
 /**
  * @author Giancarlo
  * Muestra la nota de un alumno
  * @param int $nota
  * @return int|string
  */
 function Puntuacion(int $nota): string{
    if ($nota < 0 || $nota > 10 ) {
        return null;
    }
    return match ($nota) {
         5,6 => "aprobado",
         7,8 => "notable",
         9,10 => "sobresaliente",
         default => "suspendido"
    };
 }

 echo Puntuacion(5);
?>