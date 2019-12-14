<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 14/12/2019
 * Time: 11:13
 */

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_errno) {
    echo "Deu merda!";
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

while ($row = $result->fetch_assoc()) {

    var_dump($row);

}

echo ".....................";

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

while ($row = $result->fetch_array()) {

    var_dump($row);

}

echo ".....................";

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()) {

    array_push($data, $row);

}

echo json_encode($data);