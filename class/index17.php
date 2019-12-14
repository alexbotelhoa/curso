<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 17:24
 */

class Endereco
{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct() {

        var_dump("DESTRUIR");

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Itapiranga","283","Joinville");

var_dump($meuEndereco);

echo $meuEndereco;

echo "<br><br>";

unset($meuEndereco);