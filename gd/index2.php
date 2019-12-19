<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 20:05
 */

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100,100,100);

imagestring($image,5,450,150, "CERTIFICADO", $titleColor);
imagestring($image,5,450,350, "Alex Botelho", $titleColor);
imagestring($image,3,450,370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

$filename = "certificado-" . date("d-m-Y-H-i-s") . ".jpg";

imagejpeg($image, $filename, 10);

imagedestroy($image);