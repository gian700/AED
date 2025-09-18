<?php
/**
 * Calcula el factorial de un número introducido
 * @param int $numero
 * @return int
 */
function factorial(): array
{
    $numeros = [1];
    for ($i = 2; $i < 51; $i++) {
        array_push($numeros, $i);
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                array_pop($numeros);
                break;
            }
        }
    }
    return $numeros;
}


$numeros = factorial();
foreach ($numeros as $key => $value) {
    echo $value . "\n";
}
?>