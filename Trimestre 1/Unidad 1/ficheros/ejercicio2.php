<?php
    if (!file_exists("TestFolder/")) {
        mkdir("TestFolder");
    }

    if (!file_exists("TestFolder/numeros.txt")) {
        $file = fopen("TestFolder/numeros.txt", "w");
        for ($i=0; $i < 11; $i++) { 
            fwrite($file, $i . "\n");
        }
        fclose($file);
    }

    echo file_get_contents("TestFolder/numeros.txt");
?>