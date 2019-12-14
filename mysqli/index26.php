<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 14/12/2019
 * Time: 10:52
 */

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_errno) {
    echo "Deu merda!";
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";

$pass = "12345";

$stmt->execute();