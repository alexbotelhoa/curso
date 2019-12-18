<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 17:41
 */

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

// Cria um arquivo caso não exista na primeira pasta
/*
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("d/m/Y H:i:s"));

    fclose($file);

}
*/

// Loop de mudança de pasta. Mas para funcionar tem que desabilitar o primeiro IF acima
if (file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    rename(
        $dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
        $dir2. DIRECTORY_SEPARATOR . $filename  //Destino
    );

    echo "Mudou para a folder_02";

} else {

    rename(
        $dir2. DIRECTORY_SEPARATOR . $filename,  //Origem
        $dir1 . DIRECTORY_SEPARATOR . $filename //Destino
    );

    echo "Mudou para a folder_01";

}
