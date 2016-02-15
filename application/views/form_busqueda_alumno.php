<?php
$html='<form action="../controllers/proxy-alumno.php" method="post" onsubmit="sendRequest(); return false;">
  <h2>Consultas alumnos</h2>
  <h4>Ingrese la matrícula del alumno que quiere consultar</h4>
  <label for="matricula">
    Matrícula:
  </label>
  <input type="text" name="matricula" id="matricula">
  <input type="hidden" name="source" value="busqueda">
  <button>Buscar</button>
</form>';
echo $html;
?>
