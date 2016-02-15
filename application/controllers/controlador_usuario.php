<?php
session_start();
require_once('../models/usuario.php');
require_once('../daos/dao_usuario.php');

function getUsuarios()
{
  $usuarios = array();

  $resultado = obtenerUsuarios();

  if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      $usuario = new Usuario();

      $usuario->setId($row['id']);
      $usuario->setNombreUsuario($row['nombre_usuario']);
      $usuario->setClave($row['clave']);

      array_push($usuarios, $usuario);
    }

    return $usuarios;
  } else {
    return null;
  }

}

function getUsuario($nombre_usuario, $clave)
{
  $resultado = obtenerUsuario($nombre_usuario, $clave);

  if ($resultado and mysqli_num_rows($resultado) > 0) {
    $user = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    $usuario = new Usuario();
    $usuario->setId($user['id']);
    $usuario->setNombreUsuario($user['nombre_usuario']);
    $usuario->setClave($user['clave']);

    return $usuario;
  } else {
    return null;
  }

}

function createUsuario($nombre_usuario, $clave)
{
  return crearUsuario($nombre_usuario, $clave);
}

function deleteUsuario($id)
{
  return eliminarUsuario($id);
}

function logout()
{
  $_SESSION['usuario'] = null;
  $_SESSION['login'] = 'no';
  header('location: ../views/login.php');
}

function iniciarSesion($nombre_usuario, $clave)
{
  $usuario = getUsuario($nombre_usuario, $clave);

  if ($usuario) {
    $_SESSION['usuario'] = $usuario->getNombreUsuario();
    $_SESSION['login'] = 'yes';

    return true;
  } else {
    return false;
  }
}