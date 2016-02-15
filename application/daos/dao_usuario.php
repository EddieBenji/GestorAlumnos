<?php
require_once('../daos/conexion.php');

function obtenerUsuarios()
{
  $query = "SELECT * FROM usuarios";

  return ejecutar_query($query);
}

function obtenerUsuario($nombre_usuario, $clave)
{
  $query = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND clave = '$clave';";

  return ejecutar_query($query);
}

function crearUsuario($nombre_usuario, $clave)
{
  $query = "INSERT INTO usuarios (nombre_usuario, clave) VALUES ('$nombre_usuario', '$clave');";

  return ejecutar_query($query);
}

function eliminarUsuario($clave)
{
  $query = "DELETE FROM usuarios WHERE clave = '$clave';";

  return ejecutar_query($query);
}