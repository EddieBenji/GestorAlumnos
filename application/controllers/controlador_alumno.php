<?php
require_once('../models/alumno.php');
require_once('../daos/dao_alumno.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
function findAlumnos()
{
  $alumnos = array();
  $result = obtenerAlumnos();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $alumno = new Alumno();

      $alumno->setMatricula($row["matricula"]);
      $alumno->setApellidoP($row["apellido_p"]);
      $alumno->setApellidoM($row["apellido_m"]);
      $alumno->setFechaN($row["fecha_nacimiento"]);
      $alumno->setFechaI($row["fecha_ingreso"]);
      $alumno->setGenero($row["genero"]);
      $alumno->setCorreo($row["email"]);
      $alumno->setCarrera($row["carrera"]);

      array_push($alumnos, $alumno);
    }
    return $alumnos;
  } else {
    return null;
  }
}

function findAlumno($matricula)
{
  $result = obtenerAlumno($matricula);
  if ($result and $result->num_rows > 0) {
    $temp = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $alumno = new Alumno();

    $alumno->setMatricula($temp["matricula"]);
    $alumno->setApellidoP($temp["apellido_p"]);
    $alumno->setApellidoM($temp["apellido_m"]);
    $alumno->setFechaN($temp["fecha_nacimiento"]);
    $alumno->setFechaI($temp["fecha_ingreso"]);
    $alumno->setGenero($temp["genero"]);
    $alumno->setCorreo($temp["email"]);
    $alumno->setCarrera($temp["carrera"]);

    return $alumno;
  } else {
    echo "<br/> No hay alumno cuya matricula sea: ".$matricula;
  }
}

function addAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera)
{
  $alumno = ingresarAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera);
  return $alumno;
}

function deleteAlumno($matricula) {
  $alumno = eliminarAlumno($matricula);
  return $alumno;
}

function updateAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera){
  $alumno = actualizarAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera);
  return $alumno;
}
