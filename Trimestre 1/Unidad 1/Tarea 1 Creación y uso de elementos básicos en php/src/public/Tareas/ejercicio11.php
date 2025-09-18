<?php
 function factorial(int $numero): int{
    $final = 1;

    while ($numero != 0) {
        $final = $final*$numero;
        if ($numero>0) {
            $numero--;
        }else {
            $numero++;
        }
    }
    return $final;
 }
?>