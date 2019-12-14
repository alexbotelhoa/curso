<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 18:56
 */

interface Veiculo
{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarchar($marcha);

}

class Civic implements Veiculo
{

    public function acelerar($velocidade)
    {
        // TODO: Implement acelerar() method.
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        // TODO: Implement freiar() method.
        echo "O veículo freinou até " . $velocidade . " km/h";
    }

    public function trocarMarchar($marcha)
    {
        // TODO: Implement trocarMarchar() method.
        echo "O veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();

$carro->trocarMarchar(1);