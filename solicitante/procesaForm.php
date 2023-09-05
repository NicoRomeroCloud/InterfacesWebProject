<?php
//include('conexion.php');
require 'crud.php';
//require 'config/conexion.php';

//recepcionar los datos del formulario
$elRut = $_POST['rut'];
$elNombre = $_POST['nombre'];
$elEmail = $_POST['email'];
$elTelefono = $_POST['telefono'];
$laEdad = $_POST['edad'];
$lasOcupaciones = $_POST['ocupaciones'];
$losPasatiempos = $_POST['pasatiempos'];


//imprimiendo los datos
echo "LOS DATOS RECIBIDOS SON: <br>";
echo "RUT: ".$elRut."<br>";
echo "NOMBRE: ".$elNombre."<br>";
echo "email: ".$elEmail."<br>";
echo "Telefono: ".$elTelefono."<br>";
echo "Edad: ".$laEdad."<br>";
echo "Ocupaciones: ".$lasOcupaciones."<br>";
echo "Pasatiempos: ".$losPasatiempos."<br>";

ingresarSolicitante($elRut,$elNombre,$elEmail,$elTelefono,$laEdad,$lasOcupaciones,$losPasatiempos);


exit();

?>