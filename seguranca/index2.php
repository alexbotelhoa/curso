<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 16:15
 */

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if (!is_numeric($id) || strlen($id) >= 2) {
    exit("Você foi identificado. Corre!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

    echo $resultado->deslogin . "<br>";

}