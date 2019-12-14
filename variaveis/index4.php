<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 15:47
 */

$idadeMenor = 90;
$idadeMaior = 100;

echo ($idadeMaior>$idadeMenor)?"Idade Maior":"Idade Menor";

echo "<br>";
$mesPT = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$mesEN = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

echo "<select>";
for ($a=1;$a<13;$a++) {
    echo $a."<br>";
    echo "<option value=".str_pad($a, 2, '0', STR_PAD_LEFT).">".str_ireplace($mesEN, $mesPT,date('F', strtotime("1-".$a."-1970")))."</option>";
}
echo "</select>";

echo "<br>";

for ($a=1;$a<13;$a++) {
    echo str_pad($a, 2, '0', STR_PAD_LEFT)." | ".str_ireplace($mesEN, $mesPT,date('F', strtotime("1-".$a."-1970")))."<br>";
}

echo "<br>";

?>

<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="ok">
</form>

<?php

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value . "<br>";
        echo "<hr>";
    }
}

?>
