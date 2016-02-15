<?php
require_once('./controlador_alumno.php');

$method = $_SERVER['REQUEST_METHOD'];
$source = htmlentities($_POST['source']);
if (strcmp($method, 'POST') == 0) {
  $matricula = htmlentities($_POST['matricula']);
  if ($source == 'alta' || $source == 'modificacion') {
    $apellido_p = htmlentities($_POST['apellidoP']);
    $apellido_m = htmlentities($_POST['apellidoM']);
    $fecha_nacimiento = htmlentities($_POST['fechaN']);
    $fecha_ingreso = htmlentities($_POST['fechaI']);
    $genero = htmlentities($_POST['genero']);
    $email = htmlentities($_POST['correo']);
    $carrera = htmlentities($_POST['carrera']);

    if ($source == 'alta') {
      if (addAlumno($matricula, $apellido_p, $apellido_m, $fecha_nacimiento, $fecha_ingreso, $genero, $email, $carrera)) {
        echo 'Alumno agregado correctamente';
      } else {
        echo 'Error: No se pudo crear al alumno';
      }
    } elseif ($source == 'modificacion') {
      if (updateAlumno($matricula, $apellido_p, $apellido_m, $fecha_nacimiento, $fecha_ingreso, $genero, $email, $carrera)) {
        echo 'Alumno modificado correctamente';
      } else {
        echo 'Error: No se pudo modificar al alumno';
      }
    }

  } else {
    if ($source == 'busqueda') {
      if (findAlumno($matricula)) {
        $result = rellenarBusqueda($matricula);
        echo $result;
      } else {
        echo 'Error: No se pudo encontrar al alumno';
      }
    } elseif ($source == 'baja') {
      if (deleteAlumno($matricula)) {
        echo 'Alumno eliminado correctamente';
      } else {
        echo 'Error: No se pudo eliminar al alumno';
      }
    }
  }
}

function rellenarBusqueda($matricula)
{
  $alumno = findAlumno($matricula);
  $html = '<div id="busqueda">
              <div>
                  <label><strong>Matricula:</strong> ' . $alumno->getMatricula() . ' </label>
              </div>
              <div>
                  <label><strong>Apellidos:</strong> ' . $alumno->getApellidoP() . ' ' . $alumno->getApellidoM() . ' </label>
              </div>
              <div>
                  <label><strong>Fecha Nacimiento:</strong> ' . $alumno->getFechaN() . '</label>
              </div>
              <div>
                  <label><strong>Fecha Ingreso:</strong> ' . $alumno->getFechaI() . '</label>
              </div>
              <div>
                  <label><strong>Genero:</strong> ' . $alumno->getGenero() . '</label>
              </div>
              <div>
                  <label><strong>E-mail:</strong> ' . $alumno->getCorreo() . '</label>
              </div>
              <div>
                  <label><strong>Carrera:</strong> ' . $alumno->getCarrera() . '</label>
              </div>
              </div>';
  return $html;
}