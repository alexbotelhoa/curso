<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 10:22
 */

$filename = "usuarios.csv";

if (file_exists($filename)) {

    $file = fopen($filename, "r");

    $headers = explode(";", fgets($file));

    $data = array();

    while ($row = fgets($file)) {

        $rowData = explode(";", $row);

        $linha = array();

        for ($x = 0; $x < count($headers); $x++) {

            $linha[$headers[$x]] = $rowData[$x];

        }

        array_push($data, $linha);

    }

    fclose($file);

}

//print_r($data);
echo json_encode($data);