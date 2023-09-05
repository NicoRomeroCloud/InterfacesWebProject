<?php
//include('conexion.php');
require 'crud.php';
//require 'config/conexion.php';

//recepcionar los datos del formulario
$elNombre = $_POST['nombre'];
$laEspecie = $_POST['especie'];
$laEdad = $_POST['edad'];
$elSexo = $_POST['sexo'];
$laDescripcion = $_POST['descripcion'];


//imprimiendo los datos
echo "LOS DATOS RECIBIDOS SON: <br>";

echo "Nombre: ".$elNombre."<br>";
echo "Especie: ".$laEspecie."<br>";
echo "Edad: ".$laEdad."<br>";
echo "Sexo: ".$elSexo."<br>";
echo "Descripcion: ".$laDescripcion."<br>";

ingresarMascota($elNombre, $laEspecie, $laEdad, $elSexo, $laDescripcion);


exit();

?>