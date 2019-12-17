<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 16:11
 */

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);