<?php
 /**
  * @author Giancarlo
  * Da todos los numeros primos del 1 al 50
  * @return int[]
  */
 function primos(): array {

    $numeros = [];
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
$numeros = primos();
foreach ($numeros as $key => $value) {
    echo $value . "\n";
}
?>