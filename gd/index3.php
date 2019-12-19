<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 20:33
 */

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100,100,100);


///Tá dando pau na fonte!!!!
//imagettftext($image,24,0,450,150, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
//imagettftext($image,32,0,350,150, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Roboto" . DIRECTORY_SEPARATOR . "Roboto-Regular.ttf", "CERTIFICADO");
//imagestring($image,32,450,150, "CERTIFICADO", $titleColor);
//imagettftext($image,32, 0,450,150, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Alex Botelho");
imagestring($image,3,450,370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

//$filename = "certificado-" . date("d-m-Y-H-i-s") . ".jpg";
//imagejpeg($image, $filename, 10);

imagejpeg($image);

imagedestroy($image);