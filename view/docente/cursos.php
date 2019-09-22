<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
    $_SESSION['USER_UEAS'];
    $_SESSION['USER_TYPE'];
    require_once('../../global/ClassGlobalConexion.php');
    require_once('../../model/ClassModelConsultas.php');
    require_once('../../model/ClassModelCurso.php');

    $objeto = new Consultas();
    $conexion = $objeto->get_Datos($_SESSION['USER_UEAS']);
    $objeto = new Cursos();
    $get_Cursos = $objeto->getCursos($conexion['CEDULA']);
} else {
}

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  </meta>
  <title>Home</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="../../css/administrador_index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <header>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i>Menu</a>
      <div class="nav-wrapper">
    <a href="#" class="brand-logo center">MIS CURSOS</a>

    </nav>

    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="images/office.jpg">
          </div>
          <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
          <a href="#name"><span class="white-text name"><?php if (isset($_SESSION['USER_UEAS'])) {
     echo $conexion['NOMBRE'];
 } ?></span></a>
          <a href="#email"><span class="white-text email"><?php if (isset($_SESSION['USER_UEAS'])) {
     echo $conexion['CORREO'];
 }?></span></a>
        </div>
      </li>
      <li id="li_option"><a id="option" href="./index.php" style="background-color:orange;"><i style="color:white;" class="material-icons">home</i>Inicio</a></li><br>
      <li id="li_option"><a id="option" href="../../global/logout.php"><i class="material-icons">logout</i>Cerrar Sesion</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li id="li_option"><a id="option2" class="subheader">Asistencias</a></li>
      <li><a id="option2" class="waves-effect" href="./reportes.php"><i class="material-icons">assignment_turned_in</i>Reportes de Asistencias</a></li>
      <li><a id="option2" class="waves-effect" href="./asistencias.php"><i class="material-icons">spellcheck</i>Tomar Asistencias</a></li>

    </ul>
  </header>

  <main>

    <div class="conteiner-cursos" style="align:center;">
      <?php //echo $get_Cursos;?>
    </div>


  </main>

  <footer>

  </footer>
  <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/index.js"></script>

  <style media="screen">

  .conteiner-cursos{

    width: 90%;
    margin-top:3%;
    margin-left: auto;
    margin-right: auto;
  }
  .row{
    width: 40%;
    text-align: center;
    display: inline-block;
    padding: 5px;
  border: 1px solid orange;
  margin-top: 2%;
  margin-left: 5%;
  margin-right: 4%;
  border-radius: 0px 30px 50px 30px;
}

  </style>
</body>

</html>
