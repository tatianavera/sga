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
<html>

<head>
  <meta charset="utf-8">
  </meta>
  <title>Home</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="../../css/administrador_index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <header>
    <nav>

    </nav>
  </header>

  <main>



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

  </main>

  <footer>

  </footer>
  <script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/index.js"></script>
</body>

</html>
