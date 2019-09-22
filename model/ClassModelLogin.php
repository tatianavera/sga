<?php
/**
 *
 */
class Login
{
    public function __construct()
    {
        // code...
    }

    public function get_Login($arg_User, $arg_Password)
    {
        try {
            $objecto = new Conexion();
            $conexion = $objecto->get_Conexion();
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO INSTANCIAR LA CLASE DE CONEXION MYSQL!: "." " . $e->getMessage() . "<br/>";
            die();
        }
        try {
            $query = "SELECT * FROM UE_ApostolSantiago.USUARIOS WHERE USUARIO = :_USER AND PASSWORD = :_PASSWORD";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':_USER', $arg_User, PDO::PARAM_STR);
            $stmt->bindParam(':_PASSWORD', $arg_Password, PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO PREPARA LA CONSULTA!: "." " . $e->getMessage() . "<br/>";
            die();
        }

        try {
            if (!isset($stmt)) {
                echo "ERROR CONSULTA NO DEFINIDA";
                die();
            } elseif ($stmt->execute()) {
                $stmt=null;
                $objecto = null;
                $conexion = null;
                $query= null;
                return 1;
            } else {
                return 0;
                die();
            }
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO EJECUTAR LA CONSULTA!: "." " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function get_TypeUser($arg_User)
    {
        try {
            $objecto = new Conexion();
            $conexion = $objecto->get_Conexion();
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO INSTANCIAR LA CLASE DE CONEXION MYSQL!: "." " . $e->getMessage() . "<br/>";
            die();
        }

        try {
            $query = "SELECT * FROM UE_ApostolSantiago.USUARIOS WHERE USUARIO = :_USER";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':_USER', $arg_User, PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO PREPARA LA CONSULTA!: "." " . $e->getMessage() . "<br/>";
            die();
        }

        try {
            if (!isset($stmt)) {
                echo "ERROR CONSULTA NO DEFINIDA";
                die();
            } elseif ($stmt->execute()) {
                $data=$stmt->fetchAll();
                $stmt=null;
                $objecto = null;
                $conexion = null;
                $query= null;
                return ($data);
            } else {
                return null;
                die();
            }
        } catch (PDOException $e) {
            echo "¡Error NO SE PUDO EJECUTAR LA CONSULTA!: "." " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
