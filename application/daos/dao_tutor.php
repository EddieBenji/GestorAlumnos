<?php
require_once('../daos/conexion.php');


function obtenerTutores()
{
    $sentencia_sql = "SELECT * FROM tutores;";
    $tutores = ejecutar_query($sentencia_sql);
    return $tutores;

}

function obtenerTutor($clave_prof)
{
    $sentencia_sql = "SELECT * FROM tutores WHERE clave_prof= $clave_prof;";
    $tutor = ejecutar_query($sentencia_sql);
    return $tutor;

}

function ingresarTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo)
{
    $sentencia_sql = "INSERT INTO tutores (clave_prof, apellido_p, apellido_m, genero, email, area)
            VALUES ('$clave_prof','$apellidoP','$apellidoM', '$genero', '$correo', '$area');";
    $tutor = ejecutar_query($sentencia_sql);
    if ($tutor) {
        $message = 'Tutor agregado con éxito';
        echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
    } else {
        $message = 'Ocurrió un error en el query';

        echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
    }
    return $tutor;
}

function eliminarTutor($clave_prof)
{
    $sentencia_sql = "DELETE FROM tutores WHERE clave_prof='$clave_prof';";
    $tutor = ejecutar_query($sentencia_sql);

    return $tutor;
}

function actualizarTutor($clave_prof, $apellidoP, $apellidoM, $genero, $area, $correo)
{
    $sentencia_sql = "UPDATE tutores SET apellido_p='$apellidoP', apellido_M='$apellidoM', genero='$genero', email='$correo', area='$area' WHERE clave_prof='$clave_prof';";
    $tutor = ejecutar_query($sentencia_sql);

    if ($tutor) {
        $message = 'Tutor modificado con éxito';

        echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
    } else {
        $message = 'Ocurrió un error en el query';

        echo "<SCRIPT>
            alert('$message');
         </SCRIPT>";
    }
    return $tutor;
}