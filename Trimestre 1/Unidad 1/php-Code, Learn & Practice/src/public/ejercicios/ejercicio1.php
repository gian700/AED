<?php
    /**
     * @author giancarlo
     * determine si un número entero positivo es capicúa
     * @param int $n
     * @return bool
     */
    function esCapicua(int $n): bool {
        if ($n < 0) {
            return false;
        }
        $nInverso = strrev($n);
        if ($nInverso == $n) {
            return true;
        }
        return false;
    }

    echo esCapicua(11);
    ?>