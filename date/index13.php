<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 11:30
 */

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo utf8_encode(strftime("%A %B", strtotime("2019-10-01")));