<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 09:25
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN, :PASSWORD)");
//$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "user";
$password = "4444";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);


 //echo ($stmt->execute() === true ? "Dados inseridos com sucesso!" : "Houve problema na inserção dos dados");
echo ($stmt->execute() === true ? "Dados alterados com sucesso!" : "Houve problema na alteração dos dados");