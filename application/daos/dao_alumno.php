<?php
require_once ('../daos/conexion.php');


function obtenerAlumnos(){
  $sentencia_sql = "SELECT * FROM alumnos;";
  $alumnos = ejecutar_query($sentencia_sql);
  return $alumnos;

}

function obtenerAlumno($matricula){
  $sentencia_sql = "SELECT * FROM alumnos WHERE matricula= $matricula;";
  $alumno = ejecutar_query($sentencia_sql);
  return $alumno;

}

function ingresarAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera)
{
  $sentencia_sql = "INSERT INTO alumnos (matricula, apellido_p, apellido_m, fecha_nacimiento, fecha_ingreso, genero, email, carrera)
            VALUES ('$matricula','$apellidoP','$apellidoM', '$fechaN', '$fechaI', '$genero', '$correo', '$carrera');";
  $alumno = ejecutar_query($sentencia_sql);
  if($alumno){
    $message = 'Alumno agregado con éxito';
  }else{
    $message = 'Ocurrió un error en el query';
  }
  return $message;
}

function eliminarAlumno($matricula)
{
  $sentencia_sql = "DELETE FROM alumnos WHERE matricula='$matricula';";
  $alumno = ejecutar_query($sentencia_sql);

  return $alumno;
}

function actualizarAlumno($matricula, $apellidoP, $apellidoM, $fechaN, $fechaI, $genero,$correo, $carrera){
  $sentencia_sql = "UPDATE alumnos SET apellido_p='$apellidoP', apellido_m='$apellidoM', fecha_nacimiento='$fechaN', fecha_ingreso='$fechaI', genero='$genero', email='$correo', carrera='$carrera' WHERE matricula='$matricula';";
  $alumno = ejecutar_query($sentencia_sql);

  if($alumno){
    $message = 'Alumno modificado con éxito';

    echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
  }else{
    $message = 'Ocurrió un error en el query';

    echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
  }
  return $alumno;
}
?>