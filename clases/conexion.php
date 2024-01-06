<?php

abstract class conexion {

    private $con;

    public function conectar() {
        try {
            $this->con = new PDO("mysql:dbname=sincollar;host=localhost", "root", "");
        } catch (PDOException $e) {
            die("error:" . $e);
        }
        return $this->con;
    }

    public function setNames() {
        return $this->con->query("SET NAMES 'utf8'");
    }

}
