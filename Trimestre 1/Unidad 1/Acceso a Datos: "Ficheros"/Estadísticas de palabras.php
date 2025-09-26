<?php

/**
 * lee el fichero
 * @author Giancarlo
 * @param string $path
 * @return bool|string
 */
function leer(String $path){
    $file = fopen($path, "r");
    $frase = file_get_contents($path);
    fclose($file);
    return $frase;

}

/**
 * Genera la estadisticas de cuantas veces aparece cada palabra
 * @author Giancarlo
 * @param string $path
 * @return void
 */
function estadistica(String $path){
    $frase = strtolower(leer($path));
    $frase = str_replace([",",".", "\n"],"",$frase);
    $arrayOriginal = explode(" ", $frase);
    $arrayNuevo = [[],[]];
    foreach ($arrayOriginal as $key => $value) {
        $posicion = array_search($value, $arrayNuevo[0]);
        if ($posicion === false) {
            $arrayNuevo[0][] = $value; 
            $arrayNuevo[1][] = 1;
        }else{
            $arrayNuevo[1][$posicion] = $arrayNuevo[1][$posicion]+1;
        }     
    }
    print_r ($arrayNuevo);
    escribir ($arrayNuevo, "estadisticas.csv");
}

/**
 * Escribe un nuevo csv con la informacion de la estadistica
 * @author Giancarlo
 * @param array $array
 * @param string $path
 * @return void
 */
function escribir(array $array, string $path){
    $file = fopen($path, "w");
        for ($i=0; $i < count($array[0]); $i++) { 
            fwrite($file, $array[0][$i] . "," . $array[1][$i] . "\n");
        }
        fclose($file);
}

estadistica("frase.txt");

?>