<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
    $_SESSION['USER_UEAS'];
    $_SESSION['USER_TYPE'];
    require_once('../../global/ClassGlobalConexion.php');
    require_once('../../model/ClassModelConsultas.php');

    $objeto = new Consultas();
    $conexion = $objeto->get_Datos($_SESSION['USER_UEAS']);
} else {
}

 ?>

<!DOCTYPE html>
<html lang="es">

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
    <div class="navbar-fixed">
      <nav>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i>Menu</a>
        <div class="nav-wrapper">
      <a href="#" class="brand-logo center">INICIO</a>
    </div>

      </nav>
    </div>

    <ul id="slide-out" class="sidenav sidenav-fixed">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="../../images/logo.png" style="width:100%; margin-top:0%;">
          </div>
          <a href="#user"><img class="circle" src=""></a>
          <a href="#name"><span class="white-text name"><?php if (isset($_SESSION['USER_UEAS'])) {
     echo $conexion['NOMBRE'];
 } ?></span></a>
          <a href="#email"><span class="white-text email"><?php if (isset($_SESSION['USER_UEAS'])) {
     echo $conexion['CORREO'];
 }?></span></a>
        </div>
        <br>
      </li>
      <li id="li_option"><a id="option" href="./index.php" style="background-color:orange;"><i style="color:white;" class="material-icons">home</i>Inicio</a></li><br>
      <li id="li_option"><a id="option" href="../../global/logout.php"><i class="material-icons">logout</i>Cerrar Sesion</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li id="li_option"><a id="option2" class="subheader">Subheader</a></li>
      <li><a id="option2" class="waves-effect" href="./registro_personas.php"><i class="material-icons">person</i>Agregar Estudiantes</a></li>
      <li><a id="option2" class="waves-effect" href="./reportes.php"><i class="material-icons">assignment_turned_in</i>Reportes de Asistencias</a></li>
    </ul>
  </header>

  <main>
    <img src="../../images/logo.png" style="width:100%; margin-top:0%;">
  </main>

  <footer>

  </footer>
  <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/index.js"></script>
</body>

</html>
