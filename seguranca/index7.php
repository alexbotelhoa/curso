<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 17:59
 */
//Ataque de session
session_start();

//Depois de verificar login e senha reinicie o ID da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();