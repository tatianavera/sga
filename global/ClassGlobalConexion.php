<?php

class Conexion
{
    public function __construct()
    {
        // code...
    }

    private $user = "apostols_jszambranor";
    private $password = "!TwMre.CtIhL";
    private $host = "159.69.70.225";
    private $bd = "apostols_UEAS";

    public function get_Conexion()
    {
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->password);
            if (!isset($conexion)) {
                echo "ERROR DE CONEXION";
                die();
            } else {
              return $conexion;
            }
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
