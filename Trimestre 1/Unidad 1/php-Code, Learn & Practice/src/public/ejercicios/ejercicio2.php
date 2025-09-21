<?php
/**
 * imprima una escalera de asteriscos de altura N y el tamaño M.
 * @author giancarlo
 * @param int $n
 * @param mixed $m
 * @return void
 */
function montaniaAsteriscos(int $n, $m): void
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($j % 2 == 0) {
    
                echo str_repeat("*", $i);
                echo str_repeat("_", $n - $i);
            } else {
                echo str_repeat("_", $n - $i);
                echo str_repeat("*", $i);
            }
        }
        echo "\n";
    }
}

montaniaAsteriscos(5, 5);
?>