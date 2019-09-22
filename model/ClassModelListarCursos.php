<?php
/**
 *
 */
class Cursos
{
  try {
    private $objeto = new Conexion();
    private $conexion = $objeto->get_Conexion();

  } catch (PDOException $e) {
    echo "¡Error!"." NO SE PUEDE PREPARA LA CONEXION ".$e->getMessage()."<br>";
    die();
  }


  function __construct(argument)
  {
    // code...
  }

  public function listarCursos($arg_User){
    try {
      $query = "SELECT * FROM UE_ApostolSantiago.CURSOS WHERE CEDULA_DOCENTE = :_CEDULA";
      $stmt = $this->conexion->prepare($query);
      $stmt->bindParam(':_CEDULA',$arg_User);
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE PREPARA LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

    try {
      if (!isset($stmt)) {
        echo "ERROR CONSULTA VACIA";
        die();
      }else{
        if ($stmt->execute()) {
          $data = $stmt->fetchAll();
          $stmt = null;
          return ($data);
        }else{
          echo "ERROR AL EJECUTAR LA CONSULTA";
          $stmt = null;
          return null;
          die();
        }
      }
    } catch (PDOException $e) {
          echo "¡Error!"." NO SE PUEDE EJECUTAR LA CONSULTA ".$e->getMessage()."<br>";
          die();
    }

  }
}

 ?>
