<?php
require_once('../controllers/controlador_alumno.php');
$alumnos = findAlumnos();
if ($alumnos != null) {
  $html='<h2>Modificación Alumnos</h2>
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
        <th>Modificar</th>
      </tr>';
foreach ($alumnos as $alumno) {
        $html.='<tr>
          <td>
            <input type="text" name="matricula" value="'.  $alumno->getMatricula().'" readonly>
          </td>
          <td>
            <input type="text" name="apellidoP" value="'. $alumno->getApellidoP() .'">
          </td>
          <td>
            <input type="text" name="apellidoM" value="'. $alumno->getApellidoM() .'">
          </td>
          <td>
            <input type="text" name="fechaN" value="'. $alumno->getFechaN() .'">
          </td>
          <td>
            <input type="text" name="fechaI" value="'. $alumno->getFechaI() .'">
          </td>
          <td>
            <input type="text" name="genero" value="'. $alumno->getGenero() .'">
          </td>
          <td>
            <input type="email" name="correo" value="'. $alumno->getCorreo() .'">
          </td>
          <td>
            <input type="text" name="carrera" value="'. $alumno->getCarrera() .'">
          </td>
          <td>
            <button>Modificar</button>
          </td>
        </tr>';
       }
    $html.='</table></center>
    <input type="hidden" name="source" value="modificacion">
  </form>';
} else {
  $html='<h1>NO HAY ALUMNOS REGISTRADOS EN EL SISTEMA</h1>';
}
echo $html;