<?php
Include_once ('crud.php');

//recepcionar los datos del formulario
$elRut = $_POST['rut'];
$elNombre = $_POST['nombre'];
$elEmail = $_POST['email'];
$elTelefono = $_POST['telefono'];
$laEdad = $_POST['edad'];
$lasOcupaciones = $_POST['ocupaciones'];
$losPasatiempos = $_POST['pasatiempos'];
$id_solicitante = $_GET['id'];

//imprimiendo los datos
echo "LOS DATOS RECIBIDOS SON: <br>";
echo "RUT: ".$elRut."<br>";
echo "NOMBRE: ".$elNombre."<br>";
echo "email: ".$elEmail."<br>";
echo "Telefono: ".$elTelefono."<br>";
echo "Edad: ".$laEdad."<br>";
echo "Ocupaciones: ".$lasOcupaciones."<br>";
echo "Pasatiempos: ".$losPasatiempos."<br>";


update($id_solicitante,$elRut,$elNombre,$elEmail,$elTelefono,$laEdad,$lasOcupaciones,$losPasatiempos);

header("Location: http://localhost/trabajo-interfaces-web/solicitante/prueba.php");
exit();

?>