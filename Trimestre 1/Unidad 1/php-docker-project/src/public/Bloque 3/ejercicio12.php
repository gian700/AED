<?php
/**
 * @author Giancarlo
 * Da los primeros 20 numeros de fibonacci
 * @return void
 */
function fibonacci()
{
    $a = 0;
    $b = 1;
    echo "$a\n";
    echo "$b\n";

    for ($i = 3; $i <= 20; $i++) {
        $siguiente = $a + $b;
        echo "$siguiente\n";
        $a = $b;
        $b = $siguiente;
    }
}

fibonacci()
?>