<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 9/6/15
 * Time: 1:20 PM
 */
require_once('./controlador_usuario.php');

$method = $_SERVER['REQUEST_METHOD'];
$source = htmlentities($_POST['source']);
if (strcmp($method, 'POST') == 0) {
  if ($source == 'login') {
    $user = htmlentities($_POST['user']);
    $password = htmlentities($_POST['password']);
    if (iniciarSesion($user, $password)) {
//      echo './alumno.php';
        header("location: ../views/alumno.php ");
    } else {
      echo 'Error: Nombre de usuario o contraseña incorrecto';
    }
  }
}
