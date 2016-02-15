<?php
$html='<form action="../controllers/proxy-tutor.php" method="post" onsubmit="sendRequest(); return false;">
  <h2>Consultas tutores</h2>
  <h4>Ingrese la clave del profesor que quiere consultar</h4>
  <label for="clave_prof">
    Clave de profesor:
  </label>
  <input type="text" name="clave_prof" id="clave_prof">
  <input type="hidden" name="source" value="busqueda">
  <button>Buscar</button>
</form>';
echo $html;
?>
