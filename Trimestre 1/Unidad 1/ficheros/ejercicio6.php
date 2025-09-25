<?php
    if (!file_exists("TestFolder/")) {
        mkdir("TestFolder");
    }

    if (!file_exists("TestFolder/texto.txt")) {
        file_put_contents("TestFolder/texto.txt", "PHP es muy divertido y potente.");
    }

    $string = strrev(file_get_contents("TestFolder/texto.txt"));

        if (!file_exists("TestFolder/reverso.txt")) {
        file_put_contents("TestFolder/reverso.txt", $string);
    }
?>