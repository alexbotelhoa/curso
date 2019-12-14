<?php

namespace Cliente;

class Cadastro extends \Cadastro
{
    public function registrarVenda()
    {
        echo "Foi regsitrada uma venda para o cliente " . $this->getNome();
    }
}

?>