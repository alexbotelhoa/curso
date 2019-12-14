<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 20:13
 */

class Cadastro
{

    private $nome;
    private $email;
    private $senha;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return json_encode(
            array(
                "nome"=>$this->getNome(),
                "email"=>$this->getEmail(),
                "senha"=>$this->getSenha()
            )
        );
    }

}