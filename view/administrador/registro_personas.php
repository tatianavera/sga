<?php
session_start();
if (isset($_SESSION['USER_UEAS'])) {
  $_SESSION['USER_UEAS'];
  $_SESSION['USER_TYPE'];
}else{
  //header('Location:../../index.html');
}
 ?>

  <!DOCTYPE html>
  <html lang="es">
    <head>
      <title>REGISTRO</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header></header>
      <main>

      </main>
      <footer>
      </footer>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
