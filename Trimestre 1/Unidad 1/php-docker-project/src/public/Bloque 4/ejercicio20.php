<?php
    /**
     * @author Giancarlo
     * Muestra en consola un triángulo de altura n usando *
     * @param int $tamanio
     * @return void
     */
    function triangulo(int $tamanio){
        for ($i=0; $i < $tamanio; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                echo "*";
            }
            echo "\n";
        }
    }
    triangulo(5);
?>