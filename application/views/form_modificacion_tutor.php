<?php
require_once('../controllers/controlador_tutor.php');
$tutores = findTutores();
if ($tutores != null) {
    $html = '<h2>Modificación Tutores</h2>
  <form id="cambios" action="../controllers/proxy-tutor.php" method="post" onsubmit="sendRequest(); return false;">
    <table>
      <tr>
        <th>Clave de profesor</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Genero</th>
        <th>Area</th>
        <th>E-mail</th>
        <th>Modificar</th>
      </tr>';
    foreach ($tutores as $tutor) {
        $html .= '<tr>
          <td>
            <input type="text" name="clave_prof" value="' . $tutor->getClaveprof() . '" readonly>
          </td>
          <td>
            <input type="text" name="apellidoP" value="' . $tutor->getApellidoP() . '">
          </td>
          <td>
            <input type="text" name="apellidoM" value="' . $tutor->getApellidoM() . '">
          </td>
          <td>
            <input type="text" name="genero" value="' . $tutor->getGenero() . '">
          </td>
          <td>
            <input type="text" name="area" value="' . $tutor->getArea() . '">
          </td>
          <td>
            <input type="email" name="correo" value="' . $tutor->getCorreo() . '">
          </td>
          <td>
            <button>Modificar</button>
          </td>
        </tr>';
    }
    $html .= '</table>
    <input type="hidden" name="source" value="modificacion">
  </form>';
} else {
    $html = '<h1>NO HAY TUTORES REGISTRADOS EN EL SISTEMA</h1>';
}

echo $html;