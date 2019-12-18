<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 15:30
 */

//$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$link = "https://www.esab.edu.br/wp-content/uploads/img/sge5B.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

?>

<img src="<?=$basename?>">
