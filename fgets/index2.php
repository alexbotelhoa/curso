<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 10:48
 */

$filename = "imagem4.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_self">Clique Aqui</a>

<img src="<?=$base64encode?>">
