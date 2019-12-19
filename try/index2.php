<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 13:25
 */

function trataNome($name)
{

    if (!$name) {

        throw new Exception("Nenhum nome foi informado", 1);

    }

    echo ucfirst($name) . "<br>";

}


try {

    trataNome("Alex");
    trataNome("");

} catch (Exception $e) {

    echo $e->getMessage();

} finally {

    echo "Executou o Try";

}