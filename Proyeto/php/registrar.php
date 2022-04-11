<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intento2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$seguro=$_POST['seguro']
$nombres=$_POST['nombres']
$apellidop=$_POST['apellidop']
$apellidom=$_POST['apellidom']
$nacimiento=$_POST['nacimiento']
$membresia=$_POST['membresia']
$titular=$_POST['titular']
$direccion=$_POST['direccion']
$codigo=$_POST['codigo']
$correo=$_POST['correo']
$genero=$_POST['genero']

$sql = "INSERT INTO registro (seguro, nombres, apaterno, amaterno, nacimiento, membresia, titular, domicilio, postal, correo, genero)
VALUES ($seguro,$nombres,$apellidop,$apellidom,$nacimiento,$membresia,$titular,$direccion,$codigo,$correo,$genero)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
