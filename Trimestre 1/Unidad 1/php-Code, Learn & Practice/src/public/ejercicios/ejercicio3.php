<?php
/**
 * calcule la suma de los dígitos de un número entero positivo
 * @author giancarlo
 * @param int $n
 * @return float|int
 */
function sumaDigitos(int $n): int {
    if ($n < 0) {
        return -1;
    }
    return array_sum(str_split($n));
}

echo sumaDigitos(0);
?>