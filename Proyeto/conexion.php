<?php
$conexion = mysql_connect('localhost','root','',"proyecto")
or die(myslq_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $nombre = $_POST['Nombre'];
    $apellido paterno = $_POST['Apellido paterno'];
    $apellido materno = $_POST['Apellido materno'];
    $fecha de nacimiento = $_POST['Fecha de Nacimiento'];
    
    $consulta = "INSERT INTO persona(nombre, apellido paterno, apellido materno, fecha de nacimiento)
    VALUES('$nombre','$apellido paterno','$apellido materno','$fecha de namiento')";
    mysql_query($conexion, $consulta);
    mysql_close($conexion);
    
}
?>