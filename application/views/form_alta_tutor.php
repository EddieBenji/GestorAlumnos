<?php
require_once('../controllers/controlador_tutor.php');

$html = '<h2>Altas tutores</h2>
<form action="../controllers/proxy-tutor.php" method="post" onsubmit="sendRequest(); return false;">
  <input type="hidden" name="source" value="alta">
  <div>
    <label for="clave_prof">
      Clave de profesor:
    </label>
    <input type="text" name="clave_prof" id="clave_prof">
  </div>
  <div>
    <label for="apellidoP">
      Apellido Paterno:
    </label>
    <input type="text" name="apellidoP" id="apellidoP">
  </div>
  <div>
    <label for="apellidoM">
      Apellido Materno:
    </label>
    <input type="text" name="apellidoM" id="apellidoM">
  </div>
  <div>
    <label>
      Genero
    </label>
     <select name="genero">
        <option value="H">Hombre</option>
        <option value="M">Mujer</option>
      </select>
  </div>
  <div>
    <label for="area">
      Area:
    </label>
    <input type="text" name="area" id="area">
  </div>
  <div>
    <label for="correo">
      E-mail:
    </label>
    <input type="email" name="correo" id="correo">
  </div>
  <div>
    <button>Alta</button>
  </div>
</form>';
echo $html;