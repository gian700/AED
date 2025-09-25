<?php
if (!file_exists("TestFolder/")) {
    mkdir("TestFolder");
}

if (!file_exists("TestFolder/nombres.txt")) {
    $file = fopen("TestFolder/nombres.txt", "w");
    $nombres = ["Ana", "Luis", "Marta", "Carlos", "Julia"];
    foreach ($nombres as $key => $value) {
        fwrite($file, $value . "\n");
    }
    fclose($file);
}

copy("TestFolder/nombres.txt", "TestFolder/nombres2.txt")
?>