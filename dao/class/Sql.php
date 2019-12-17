<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 15:11
 */

class Sql extends PDO {

    private  $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value)
        {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $parameters = array())
    {
        $statement = $this->conn->prepare($rawQuery);

        $this->setParams($statement, $parameters);

        $statement->execute();

        return $statement;
    }

    public function select($rawQuery, $parameters = array()):array
    {
        $statement = $this->query($rawQuery, $parameters);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}