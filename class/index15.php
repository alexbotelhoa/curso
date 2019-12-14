<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 16:37
 */

class Pessoa {

    public $nome; //Atributor

    public function falar(){//Método

        return "O meu é ".$this->nome;

    }

}

$alex = new Pessoa();

$alex->nome = "Alex Botelho";

echo $alex->falar();

echo "<br>";

class Carro
{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {

        return $this->modelo;

    }

    public function setModelo($modelo)
    {

        $this->modelo = $modelo;

    }

    public function getMotor():float
    {

        return $this->motor;

    }

    public function setMotor($motor)
    {

        $this->motor = $motor;

    }

    public function getAno():int
    {

        return $this->ano;

    }

    public function setAno($ano)
    {

        $this->ano = $ano;

    }

    public function exibir()
    {

        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );

    }

}

$carro = new Carro();

$carro->setModelo("Gol");
$carro->setMotor("1.6");
$carro->setAno("2010");

print_r($carro->exibir());

echo "<br>";

var_dump($carro->exibir());

echo "<br>";