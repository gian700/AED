<?php
/**
 * @author Giancarlo
 * Genera un número aleatorio entre 1 y 20.
 * Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: "Mayor" o "Menor".
 * @return string
 */
function juego()
{
    $numero = rand(1, 20);
    $adivinado = true;
    while ($adivinado) {
        $nDado = readline("ingresa un numero ");
        if ($nDado < $numero) {
            echo "el numero ingresado es mas pequeño \n";
        } else if ($nDado > $numero) {
            echo "el numero ingresado es mas grande \n";
        }
        if ($nDado == $numero) {
            $adivinado = false;
            break;
        }
    }
    return "Ganaste";
}

echo juego();
?>