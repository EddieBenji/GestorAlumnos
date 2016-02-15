<?php
require_once('./controlador_tutor.php');

$method = $_SERVER['REQUEST_METHOD'];
$source = htmlentities($_POST['source']);
if (strcmp($method, 'POST') == 0) {
  $clave_prof = htmlentities($_POST['clave_prof']);
  if ($source == 'alta' || $source == 'modificacion') {
    $apellido_p = htmlentities($_POST['apellidoP']);
    $apellido_m = htmlentities($_POST['apellidoM']);
    $genero = htmlentities($_POST['genero']);
    $area = htmlentities($_POST['area']);
    $email = htmlentities($_POST['correo']);

    if ($source == 'alta') {
      if (addTutor($clave_prof, $apellido_p, $apellido_m, $genero, $area, $email)) {
        echo 'Tutor agregado correctamente';
      } else {
        echo 'Error: No se pudo crear al tutor';
      }
    } elseif ($source == 'modificacion') {
      if (updateTutor($clave_prof, $apellido_p, $apellido_m, $genero, $area, $email)) {
        echo 'Tutor modificado correctamente';
      } else {
        echo 'Error: No se pudo modificar al tutor';
      }
    }

  } else {
    if ($source == 'busqueda') {
      if (findTutor($clave_prof)) {
        $result = rellenarBusqueda($clave_prof);
        echo $result;
      } else {
        echo 'Error: No se pudo encontrar al tutor';
      }
    } elseif ($source == 'baja') {
      if (deleteTutor($clave_prof)) {
        echo 'Tutor eliminado correctamente';
      } else {
        echo 'Error: No se pudo eliminar al tutor';
      }
    }
  }
}

function rellenarBusqueda($clave_prof)
{
  $tutor = findTutor($clave_prof);
  $html = '<div id="busqueda">
              <div>
                  <label><strong>Clave de profesor:</strong> ' . $tutor->getClaveprof() . ' </label>
              </div>
              <div>
                  <label><strong>Apellidos:</strong> ' . $tutor->getApellidoP() . ' ' . $tutor->getApellidoM() . ' </label>
              </div>
              <div>
                  <label><strong>Genero:</strong> ' . $tutor->getGenero() . '</label>
              </div>
              <div>
                  <label><strong>Área:</strong> ' . $tutor->getArea() . '</label>
              </div>
              <div>
                  <label><strong>E-mail:</strong> ' . $tutor->getCorreo() . '</label>
              </div>
              </div>';
  return $html;
}