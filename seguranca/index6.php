<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 17:35
 */


///Mcrypt foi descontinuado e agora é OpenSSL
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
    "nome" => "Alex"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

//Decriptar
$string = openssl_decrypt(
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

var_dump(json_decode($string), true);
