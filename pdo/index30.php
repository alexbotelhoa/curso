<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 09:25
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

/**............................................**/

//$stmt1 = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$stmt1 = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

//$stmt1->bindParam(":LOGIN", $login);
//$stmt1->bindParam(":PASSWORD", $password);
$stmt1->bindParam(":ID", $id);

$login = "user";
$password = "4444";
$id = 7;

echo ($stmt1->execute() === true ? "Transação [1] OK" : "Transação [1] BUGADA!!!") . "<br>";

/**............................................**/

//$stmt2 = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN, :PASSWORD)");
$stmt2 = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

///$stmt2->bindParam(":LOGIN", $login);
//$stmt2->bindParam(":PASSWORD", $password);
$stmt2->bindParam(":ID", $id);

$login = "alexbotelho";
$password = "1111111";
$id = 8;

echo ($stmt2->execute() === true ? "Transação [2] OK" : "Transação [2] BUGADA!!!") . "<br>";

/**............................................**/

echo (($stmt1->execute() === true AND $stmt2->execute() === true) ? "Transações [1] e [2] realizadas com sucesso!" . $conn->commit() : "Transações [1] e [2] NÃO realizadas!!!" . $conn->rollBack());