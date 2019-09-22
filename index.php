<?php
require_once('../global/ClassNavbar.php');
$objeto = new NavBar();
$navbar=$objeto->get_NavBarPublic();
$footer=$objeto->get_Footer();
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link type="text/css" rel="stylesheet" href="./css/index.css">
</head>

<body>

  <header>
    <?php
    echo $navbar;
    ?>
  </header>

  <main>
    <div class="section container" id="container">
      <div class="row card-panel">
        <form class="col s12" action="./controller/ClassControllerLogin.php" method="POST">
          <div class="row">
            <img src="./images/logo.png" alt="">
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate" name="usuario" required>
              <label for="icon_prefix">Usuario</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="icon_telephone" type="password" class="validate" name="password" required>
              <label for="icon_telephone">Contraseña</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Sesion
              <i class="material-icons left">verified_user</i>
            </button>
          </div>
        </form>
      </div>
    </div>

  </main>

  <section>

  </section>

  <footer>
  </footer>



  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      var elems = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elems);
      var elems1 = document.querySelectorAll('.parallax');
      var instances1 = M.Parallax.init(elems1);
    });
    $(document).ready(function() {

      $('.sidenav').sidenav();
      $('.dropdown-trigger').dropdown();
      $('.slider').slider();
    });
  </script>

</body>

</html>
