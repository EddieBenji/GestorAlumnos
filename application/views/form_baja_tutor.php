<?php
require_once('../controllers/controlador_tutor.php');
$tutores = findTutores();
if ($tutores != null) {
  $html='<h2>Bajas Tutores</h2>
    <center>
    <table>
      <tr>
        <th>Clave de profesor</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Genero</th>
        <th>Area</th>
        <th>E-mail</th>
        <th>Dar Baja</th>
      </tr>';
  foreach ($tutores as $tutor) {
    $html.='  <form id="cambios" action="../controllers/proxy-tutor.php" method="post" onsubmit="sendRequest(); return false;">

<tr>
          <td>
            <input type="text" readonly name="clave_prof" value="'.  $tutor->getClaveprof().'" >
          </td>
          <td>
            <label>'. $tutor->getApellidoP() .'</label>
          </td>
          <td>
            <label>'. $tutor->getApellidoM() .'</label>
          </td>
          <td>
            <label>'. $tutor->getGenero() .'</label>
          </td>
          <td>
            <label>'. $tutor->getArea() .'</label>
          </td>
          <td>
            <label>'. $tutor->getCorreo() .'</label>
          </td>
          <td>
            <button>Eliminar</button>
          </td>
        </tr>
        <input type="hidden" name="source" value="baja">
  </form>';
  }
  $html.='</table></center>
    ';
} else {
  $html ='<h1>NO HAY TUTORES REGISTRADOS EN EL SISTEMA</h1>';
}

echo $html;
?>