<?php
require_once('../controllers/controlador_alumno.php');

$html = '<h2>Altas alumnos</h2>
<form action="../controllers/proxy-alumno.php" method="post" onsubmit="sendRequest(); return false;">
  <input type="hidden" name="source" value="alta">
  <div>
    <label for="matricula">
      Matricula:
    </label>
    <input type="text" name="matricula" id="matricula">
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
    <label for="fechaN">
      Fecha Nacimiento:
    </label>
    <input type="date" name="fechaN" id="fechaN">
  </div>
  <div>
    <label for="fechaI">
      Fecha Ingreso:
    </label>
    <input type="date" name="fechaI" id="fechaI">
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
    <label for="correo">
      E-mail:
    </label>
    <input type="email" name="correo" id="correo">
  </div>
  <div>
    <label for="carrera">
      Carrera:
    </label>
    <input type="text" name="carrera" id="carrera">
  </div>
  <div>
    <button>Alta</button>
  </div>
</form>';
echo $html;