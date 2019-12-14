<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 18:18
 */

class Pessoa
{

    public $nome = "Alex Botelho";
    protected $idade = 40;
    private $senha = "123456";

    public function getPessoas(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Programador();

echo $objeto->nome; //Pode enchergar pq é publico
echo "<br>";
//echo $objeto->idade; //Não pode enchergar pq é protegido (protected), só dentro da classe e nas heranças
echo "<br>";
//echo $objeto->senha; //Não pode enchergar pq é privado (private), só dentro da classe
echo "<br>";

echo $objeto->getPessoas();

echo "<br>";

class Programador extends Pessoa
{

    public function getPessoas(){

        echo get_class() . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}



