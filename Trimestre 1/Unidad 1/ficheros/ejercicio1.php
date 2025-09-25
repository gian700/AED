<?php
    if (!file_exists("TestFolder/")) {
        mkdir("TestFolder");
    }

    if (!file_exists("TestFolder/datos.txt")) {
        $file = fopen("TestFolder/datos.txt", "w");
        fwrite($file, "Hola Mundo desde PHP");
        fclose($file);
    }

    echo file_get_contents("TestFolder/datos.txt");
?>