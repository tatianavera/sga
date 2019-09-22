<?php
class Consultas(){


 function __construct()
    {

    }

  try {
    private $objeto = new Conexion();
    private $conexion = $objeto->get_Conexion();
  } catch (PDOException $e) {
    echo "¡Error!"." NO SE PUEDE PREPARA LA CONEXION ".$e->getMessage()."<br>";
    die();
  }

  public function get_Datos($arg_User){
    try {
      $query = "SELECT * FROM UE_ApostolSantiago.PERSONAS WHERE CORREO = :_CORREO";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(':_CORREO',$_arg_User,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE PREPARA LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

    try {
    if (!isset($stmt)) {
      echo "ERROR CONSULTA VACIA";
    }elseif ($stmt->execute()) {
      $data = $stmt->fetch();
      $stmt = null;
      return ($data);
    }
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE EJECUTAR LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

  }

  public function get_DatosAlumno($arg_Cedula){
    try {
      $query="SELECT * FROM PERSONAS WHERE CEDULA = :_CEDULA";
      $smtm = $this->conexion->prepare($query);
    } catch (PDOException $e) {
      echo "NO SE PUEDE PREPARAR LA CONSULTA"." ".$e->getMessage()."<br>";
      die();
    }

    try {
      $stmt->bindParam(':_CEDULA',$arg_Cedula,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "NO SE PUEDE ENVIAR LOS PARAMETROS A LA CONSULTA"." ".$e->getMessage()."<br>";
      die();
    }

    try {

      if ($stmt->execute()) {
        $data = $stmt->fetch();
        $stmt = null;
        return $data;
      }else{
        echo "NO SE PUEDE EJECUTAR LA CONSULTA INTENTE NUEVAMENTE";
      }

    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE EJECUTAR LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

  }


}

 ?>
