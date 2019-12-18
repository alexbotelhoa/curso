<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 10:10
 */

$filename = "texte.txt";

$file = fopen($filename, "w+");

fclose($file);

unlink($filename);

