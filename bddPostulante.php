<?php

include 'conexionBDD.php';
if($_POST){ 
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$adopcion = $_POST['adopcion'];

if ($nombre === '' || $rut === '' || $correo === '' || $direccion === '' || $telefono === '' || $adopcion === '') {
    echo "<script> alert('Admin ingresado falta nombre'); location.href = '../trabajo-interfaces-web';</script>" ;
} else {
    $insertar = "INSERT INTO persona (nombre, rut, correo, direccion, telefono, adopcion) values ('$nombre', '$rut', '$correo', '$direccion', '$telefono', '$adopcion') ";

    $query = $bdd->query($insertar);
    if($query){
        echo "<script> alert('Admin ingresado correctamente'); location.href = '../trabajo-interfaces-web';</script>";
    }else{
        echo "<script> alert('Error al ingresar admin, intente de nuevo'); location.href = '../trabajo-interfaces-web';</script>";
    }
}

}




?>