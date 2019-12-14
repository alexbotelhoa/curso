<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 18:29
 */

$pessoa = array();

array_push($pessoa, array(
    'nome'=>'Alex',
    'idade'=>40
));

array_push($pessoa, array(
    'nome'=>'Marcel',
    'idade'=>16
));

print_r($pessoa);

echo "<br>";

$jsonEncode = json_encode($pessoa);

echo $jsonEncode;

echo "<br>";echo "<br>";

$json = $jsonEncode;

$jsonDecode = json_decode($json, true);

print_r($jsonDecode);

