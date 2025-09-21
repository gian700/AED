<?php
    /**
     * @author giancarlo
     * genere la secuencia de Collatz a partir de un entero positivo
     * @param int $n
     * @return int[]
     */
    function secuenciaCollatz(int $n): array{
        if($n < 1) {
            return [];
        }

        $Collatz = [$n];
        $valor = $n;

        while ($valor != 1) {
            $valor%2 == 0? $valor /= 2 : $valor = $valor*3+1;  
            $Collatz[] = $valor;
        }
        return $Collatz;
    }

    print_r(secuenciaCollatz(6));
?>