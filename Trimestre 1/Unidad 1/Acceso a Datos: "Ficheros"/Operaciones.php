<?php
    /**
     * Lee el csv
     * @author Giancarlo
     * @param string $path
     */
    function leerCsv(string $path){
        $originalFile = fopen($path, "r");
        $lineas =count(file($path));
        $array = [];
        for ($i=0; $i < $lineas ; $i++) { 
            $arrayLinea = explode(",", fgets($originalFile));
            $array[] = $arrayLinea;
        }
        return resolverArray($array);

    }

    /**
     * Resuelve las operaciones del array
     * @author Giancarlo
     * @param array $array
     */
    function resolverArray(Array $array){
        $array[0] = ["z1","z2","op","resultado"];
        for ($i=1; $i < count($array); $i++) {
            $nuevaArray = $array[$i];
            $nuevaArray[2] = trim($nuevaArray[2]);

            try {
                $resultado = match($nuevaArray[2]) {
                "suma" => $nuevaArray[0] + $nuevaArray[1],
                "resta" => $nuevaArray[0] - $nuevaArray[1],
                "producto" => $nuevaArray[0] * $nuevaArray[1],
                "division" => $nuevaArray[0] / $nuevaArray[1]
                };
            }catch(\DivisionByZeroError $e) {
                $resultado = "error";
            }
            $nuevaArray[] = $resultado;
            $array[$i] = $nuevaArray;
            
        }
        return escribir($array, "resultado.csv"); 
    }

    /**
     * Escribe un nuevo csv con los resultados
     * @author Giancarlo
     * @param array $array
     * @param string $path
     * @return void
     */
    function escribir(Array $array, string $path){
        $file = fopen($path, "w");
        foreach ($array as $key => $arrayHijo) {
            for ($i=0; $i < count($arrayHijo); $i++) { 
                fwrite($file, (string) $arrayHijo[$i]);
                if ($i < 3) {
                    fwrite($file, ",");
                }
            }
            fwrite($file, "\n");
        }
        fclose($file);
    }

    leerCsv("ops.csv");
?>