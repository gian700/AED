<?php
    /**
     * @author Giancarlo
     * comprueba si es un palindromo
     * @param string $valor
     * @return string
     */
    function palindromo (String $valor): bool{
        $alRevez = strrev($valor);
        return $alRevez == $valor;
    }

    if (palindromo("pararap")){
        echo "dio true";
    }else{
        echo "dio false";
    }
?>