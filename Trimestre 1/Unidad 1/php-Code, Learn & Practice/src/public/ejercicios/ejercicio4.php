<?php
    /**
     * @author giancarlo
     * devuelva todos los múltiplos de 3 o 5 menores que N. El ultimo valor del array es la suma de dichos múltiplos.
     * @param int $n
     * @return array<float|int>
     */
    function multiplosTresOCinco(int $n): array{
        $multiplosTresOCinco = [];
        if ($n < 3) {
            return $multiplosTresOCinco;
        }
        for ($i = 0; $i < $n; $i++){
            if ($i%3 == 0 || $i%5 == 0) { 
                $multiplosTresOCinco[] = $i;
            }
        }
        $multiplosTresOCinco[] = array_sum($multiplosTresOCinco);
        return $multiplosTresOCinco;
    }

    print_r (multiplosTresOCinco(15));
?>