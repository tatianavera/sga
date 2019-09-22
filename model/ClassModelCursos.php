<?php
/**
 *
 */
class Cursos
{

  function __construct()
  {

  }
  try {
    private $model = new Conexion();
    private $conexion = $model->get_Conexion();
  } catch (PDOException $e) {
  echo "¡Error! NO SE PUEDE ESTABLECER LA CONEXION"." ".$e->getMessage()."<br>";
  }



  function get_Cursos($arg_IdDocente){
  $cadena = null;
    try {
      $query = "SELECT * FROM UE_ApostolSantiago.CURSOS,UE_ApostolSantiago.CATEDRAS WHERE CEDULA_DOCENTE = :_CEDULA";
      $stmt = $this->conexion->prepare($query);
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE PREPARA LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

    try {
      $stmt->bindParam(':_CEDULA',$arg_IdDocente,PDO::PARAM_STR);
    } catch (PDOException $e) {
      echo "¡Error!"." NO SE PUEDE ENVIAR LOS PARAMETROS A LA CONSULTA ".$e->getMessage()."<br>";
      die();
    }

    try {
      if (isset($stmt)) {
        if ($stmt->execute()) {
        while ($data = $stmt->fetch()) {
          $cadena = $cadena.'
          <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">'.$data["NOMBRE_CATEDRA"].'</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red" href="./asistencias.php?$cod='.$data['COD_CURSO'].'"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>CURSO   : '.$data["COD_CURSO"].'</p>
          <p>CATEDRA : '.$data["COD_CURSO"].'</p>
          <p>JORNADA : '.$data["COD_CURSO"].'</p>
        </div>
      </div>
    </div>
  </div>';
        }
        return ($cadena);
      }else{
        return "ERROR AL OBTENER LOS CURSOS";
      }
    }else{
      echo "ERROR CONSULTA VACIA";
    }

    } catch (PDOException $e) {

      echo $e->getMessage();

    }
  }

  function get_Alumno($arg_Curso){

    $query = "SELECT * UE_ApostolSantiago.PERSONAS,UE_ApostolSantiago.ALUMNOS, ";

  }
}

 ?>
