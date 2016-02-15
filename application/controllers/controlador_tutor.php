<?php
require_once('../models/tutor.php');
require_once('../daos/dao_tutor.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
function findTutores()
{
  $tutores = array();
  $result = obtenerTutores();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $tutor = new Tutor();

      $tutor->setClaveprof($row["clave_prof"]);
      $tutor->setApellidoP($row["apellido_p"]);
      $tutor->setApellidoM($row["apellido_m"]);
      $tutor->setGenero($row["genero"]);
      $tutor->setArea($row["area"]);
      $tutor->setCorreo($row["email"]);

      array_push($tutores, $tutor);
    }
    return $tutores;
  } else {
    return null;
  }
}

function findTutor($clave_prof)
{
  $result = obtenerTutor($clave_prof);
  if ($result and $result->num_rows > 0) {
    $temp = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $tutor = new Tutor();

    $tutor->setClaveprof($temp["clave_prof"]);
    $tutor->setApellidoP($temp["apellido_p"]);
    $tutor->setApellidoM($temp["apellido_m"]);
    $tutor->setGenero($temp["genero"]);
    $tutor->setArea($temp["area"]);
    $tutor->setCorreo($temp["email"]);

    return $tutor;
  } else {
    echo "<br/> No hay tutor cuya clave sea: " . $clave_prof;
  }
}

function addTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo)
{
  $tutor = ingresarTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo);
  return $tutor;
}

function deleteTutor($clave_prof) {
  $tutor = eliminarTutor($clave_prof);
  return $tutor;
}

function updateTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo){
  $tutor = actualizarTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo);
  return $tutor;
}
