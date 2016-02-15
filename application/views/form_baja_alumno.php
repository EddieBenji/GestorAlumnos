<?php
require_once('../controllers/controlador_alumno.php');
$alumnos = findAlumnos();
if ($alumnos != null) {
  $html='<h2>Bajas Alumnos</h2>
  <form id="cambios" action="../controllers/proxy-alumno.php" method="post" onsubmit="sendRequest(); return false;">
    <center>
    <table>
      <tr>
        <th>Matricula</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha Nacimiento</th>
        <th>Fecha Ingreso</th>
        <th>Genero</th>
        <th>E-mail</th>
        <th>Carrera</th>
        <th>Dar Baja</th>
      </tr>';
  foreach ($alumnos as $alumno) {
    $html.='<tr>
          <td>
            <input type="text" readonly name="matricula" value="'.  $alumno->getMatricula().'" >
          </td>
          <td>
            <label>'. $alumno->getApellidoP() .'</label>
          </td>
          <td>
            <label>'. $alumno->getApellidoM() .'</label>
          </td>
          <td>
            <label>'. $alumno->getFechaN() .'</label>
          </td>
          <td>
            <label>'. $alumno->getFechaI() .'</label>
          </td>
          <td>
            <label>'. $alumno->getGenero() .'</label>
          </td>
          <td>
            <label>'. $alumno->getCorreo() .'</label>
          </td>
          <td>
            <label>'. $alumno->getCarrera() .'</label>
          </td>
          <td>
            <button>Eliminar</button>
          </td>
        </tr>';
  }
  $html.='</table></center>
    <input type="hidden" name="source" value="baja">
  </form>';
} else {
  $html='<h1>NO HAY ALUMNOS REGISTRADOS EN EL SISTEMA</h1>';
}

echo $html;
?>