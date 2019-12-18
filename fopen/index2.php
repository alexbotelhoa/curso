<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 09:00
 */

require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario ASC");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(";", $headers) . "\r\n");

foreach ($usuarios as $row) {

    $data = array();

    foreach ($row as $key => $value) {

        array_push($data, $value);

    }//Foreach dos Dados dos Usuários (Coluna)

    fwrite($file, implode(";", $data) . "\r\n");

}//Foreach dos Usuários da Tabela (Linha)

fclose($file);
//print_r($headers);