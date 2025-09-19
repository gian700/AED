<?php
    /**
     * @author Giancarlo
     * Invierte un numero
     * @param int $valor
     * @return string
     */
    function invertirNumero (int $valor){
        $numeroString = strrev($valor);
        return $numeroString;
    }

    echo invertirNumero(657);
?>