<?php
    /**
     * @author Giancarlo
     * Saca todos los divisores de un numero
     * @param int $valor
     * @return array
     */
    function divisores(int $valor): array{
        $divisor = [];
        for ($i=$valor-1; $i > 0; $i--) { 
            if ($valor%$i == 0) {
                array_push($divisor, $i);
            }
        }
        return $divisor;
    }

    /**
     * @author Giancarlo
     * Comprueba si un numero es perfecto
     * @param int $valor
     * @return bool
     */
    function perfecto(int $valor): string{
        $divisor = divisores($valor);
        $suma = array_sum($divisor);
        if ($valor == $suma) {
            return "true";
        }
        return "false";
    }
?>