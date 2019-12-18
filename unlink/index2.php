<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 10:17
 */

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
    if (!in_array($item, array(".",".."))) {
        unlink("images" . DIRECTORY_SEPARATOR . $item);
    }
}

echo "OK";