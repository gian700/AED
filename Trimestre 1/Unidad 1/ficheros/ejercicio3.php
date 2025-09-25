<?php
    if (!file_exists("TestFolder/")) {
        mkdir("TestFolder");
    }

    if (!file_exists("TestFolder/texto.txt")) {
        file_put_contents("TestFolder/texto.txt", "PHP es muy divertido y potente.");
    }

        echo str_word_count(file_get_contents("TestFolder/texto.txt"));
?>