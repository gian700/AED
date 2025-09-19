<?php
/**
 * @author Giancarlo
 * Calcula el factorial de un número introducido
 * @param int $numero
 * @return int
 */
function factorial(int $numero): int|null
{
    if ($numero < 0) {
        return null;
    }
    $final = 1;

    while ($numero != 0) {
        $final = $final*$numero;
        if ($numero>0) {
            $numero--;
        }
    }
    return $final;
}

echo factorial(5);
?>