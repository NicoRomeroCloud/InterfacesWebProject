<?php
Include_once ('crud.php');

//recepcionar los datos del formulario
$elNombre = $_POST['nombre'];
$laEspecie = $_POST['especie'];
$laEdad = $_POST['edad'];
$elSexo = $_POST['sexo'];
$laDescripcion = $_POST['descripcion'];
$id_mascota = $_GET['id'];

//imprimiendo los datos
echo "Nombre: ".$elNombre."<br>";
echo "Especie: ".$laEspecie."<br>";
echo "Edad: ".$laEdad."<br>";
echo "Sexo: ".$elSexo."<br>";
echo "Descripcion: ".$laDescripcion."<br>";


update($id_mascota,$elNombre, $laEspecie, $laEdad, $elSexo, $laDescripcion);

header("Location: http://localhost/trabajo-interfaces-web/mascota/prueba.php");
exit();

?>