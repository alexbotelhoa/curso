<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 17/12/2019
 * Time: 10:37
 */

class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha)
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function searchId($id)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    public static function searchAll()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");
    }

    public static function searchLogin($login)
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY idusuario", array(
            ':SEARCH' => "%" . $login . "%"
        ));
    }

    public function searchLoginPassword($login, $senha)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        } else {
            throw new Exception("Login e/ou Senha não encontrado(s)!");
        }
    }

    public function insert()
    {
        $sql = new Sql();

        $result = $sql->select("CALL sp_usuario_insert(:LOGIN, :SENHA)", array(
            ':LOGIN' => $this->getDeslogin(),
            ':SENHA' => $this->getDessenha()
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    public function update($login, $senha)
    {
        $this->setDeslogin($login);
        $this->setDessenha($senha);

        $sql = new Sql();

        $sql->select("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", array(
            ':LOGIN' => $this->getDeslogin(),
            ':SENHA' => $this->getDessenha(),
            ':ID' => $this->getIdusuario()
        ));
    }

    public function __construct($login = "", $senha = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($senha);
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}