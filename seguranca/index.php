<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 15:58
 */


/**
 * Testar com o comando:
 * dir C:\ && mkdir c:\xampp\htdocs\curso\seguranca\teste
 * e invertido
 */
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $cmd = escapeshellcmd($_POST['cmd']);

    var_dump($cmd);

    echo "</pre>";

    $comando = system($cmd, $retorno);

    echo "</pre>";
}

?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>