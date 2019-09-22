<?php
require_once '../global/ClassGlobalConexion.php';
require_once '../model/ClassModelLogin.php';

try {
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $user = $_POST['usuario'];
        $password = $_POST['password'];
    } else {
        echo "¡Error!";
        die();
    }
} catch (PDOException $e) {
    echo "¡Error!: "." " . $e->getMessage() . "<br/>";
    die();
}


try {
    if ($user == null && $password == null) {
        echo "CREDENCIALES VACIAS <br> PORFAVOR INGRESE SU USUARIO Y CONTRASEÑAS E INTENTE NUEVAMENTE";
        echo "REDIRECCIONANDO";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=../index.html">';
    } else {
        $instance = new Login();
        $login = $instance->get_Login($user, $password);
        $type = $instance->get_TypeUser($user);
    }
} catch (PDOException $e) {
    echo "¡Error!: "." " . $e->getMessage() . "<br/>";
    die();
}

try {
    if ($login==1) {
        session_start();
        $_SESSION['USER_UEAS'] = $user;
        $type = $instance->get_TypeUser($user);
        $_SESSION['USER_TYPE'] = $type['TIPO'];
        if ($_SESSION['USER_TYPE']=='3') {
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../view/estudiante/index.php">';
        } elseif ($_SESSION['USER_TYPE']=='2') {
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../view/docente/index.php">';
        } elseif ($_SESSION['USER_TYPE']=='1') {
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../view/administrador/index.php">';
        } elseif ($_SESSION['USER_TYPE']==null) {
            echo "¡Error! TIPO DE USUARIO INVALIDO";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=../index.html">';
        }
    } else {
        echo "USUARIO O CONTRASEÑA INCORRECTAS INTENTE NUEVAMENTE";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=../index.html">';
    }
} catch (PDOException $e) {
    echo "¡Error!: "." " . $e->getMessage() . "<br/>";
    die();
}
