<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 08:28
 */

$nameDir = "images";

$images = scandir("$nameDir");

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array('.', '..'))) {
        $filename = $nameDir . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/dir/" . str_replace("\\", "/", $filename);

        array_push($data, $info);
    }
}

echo json_encode($data);