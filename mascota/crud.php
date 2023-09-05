<?php

Include_once ('../config/Conexion.php');


function ingresarMascota($elNombre, $laEspecie, $laEdad, $elSexo, $laDescripcion){
    // nombre, especie, edad, sexo, descripcion

    //conexion a la bdd
    $db = new Conexion();
    $conn = $db->conectar();
    //prepar query
    $query = "INSERT INTO mascota (nombre, especie, edad, sexo, descripcion) VALUES ('".$elNombre."','".$laEspecie."','".$laEdad."','".$elSexo."','".$laDescripcion."')";

    //ejecutar la query
    $resultado = mysqli_query($conn,$query);

    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }

    //cerrar conexion
    mysqli_close($conn);
}

function obtenerMascotas(){
    $db = new Conexion();
    $conn = $db->conectar();
    
    $query = "SELECT * FROM mascota;";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }
    $elRetorno = array();
    while($row = mysqli_fetch_array($resultado)){
       $elRetorno[] = $row;
    }
    mysqli_close($conn);
    return $elRetorno;
}

function eliminar($id_mascota){

    $db = new Conexion();
    $conn = $db->conectar();

    $query = "DELETE FROM mascota WHERE id = ".$id_mascota.";";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        print('Consulta no válida: ' . mysqli_error());
        return false;
    }

    mysqli_close($conn);
    return true;
}

function obtenerPorId($id_mascota){
    $db = new Conexion();
    $conn = $db->conectar();

    
    $query = "SELECT * FROM mascota WHERE id = '".$id_mascota."';";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }
   
    $row = mysqli_fetch_array($resultado);
       
    mysqli_close($conn);
    return $row;
} 

function update($id_mascota,$elNombre, $laEspecie, $laEdad, $elSexo, $laDescripcion){
    $db = new Conexion();
    $conn = $db->conectar();
    $bd_table = "mascota";
   
    
    $query = "UPDATE ".$bd_table." SET nombre = '".$elNombre."', especie='".$laEspecie."', edad='".$laEdad."', sexo='".$elSexo."', descripcion='".$laDescripcion."' WHERE id = '".$id_mascota."';";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }
    
    mysqli_close($conn);
}

?>