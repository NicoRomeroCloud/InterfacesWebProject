<?php

Include_once ('../config/Conexion.php');



//function insertaSolicitante($elRut,$elNombre,$elApellido){
function ingresarSolicitante($elRut,$elNombre,$elEmail,$elTelefono,$laEdad,$lasOcupaciones,$losPasatiempos){
    // rut, nombre, email, telefono, edad, ocupaciones, pasatiempos

    //conexion a la bdd
    $db = new Conexion();
    $conn = $db->conectar();
    //prepar query
    $query = "INSERT INTO solicitante (rut, nombre, email, telefono, edad, ocupaciones, pasatiempos) VALUES ('".$elRut."','".$elNombre."','".$elEmail."','".$elTelefono."','".$laEdad."','".$lasOcupaciones."','".$losPasatiempos."')";

    //ejecutar la query
    $resultado = mysqli_query($conn,$query);

    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }

    //cerrar conexion
    mysqli_close($conn);
}

function obtenerSolicitantes(){
    $db = new Conexion();
    $conn = $db->conectar();
    
    $query = "SELECT * FROM solicitante;";
    
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

function eliminar($id_del_solicitante){

    $db = new Conexion();
    $conn = $db->conectar();

    $query = "DELETE FROM solicitante WHERE id = ".$id_del_solicitante.";";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        print('Consulta no válida: ' . mysqli_error());
        return false;
    }

    mysqli_close($conn);
    return true;
}

function obtenerPorId($id_del_solicitante){
    $db = new Conexion();
    $conn = $db->conectar();

    
    $query = "SELECT * FROM solicitante WHERE id = '".$id_del_solicitante."';";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }
   
    $row = mysqli_fetch_array($resultado);
       
    mysqli_close($conn);
    return $row;
} 

function update($id_del_solicitante,$elRut,$elNombre,$elEmail,$elTelefono,$laEdad,$lasOcupaciones,$losPasatiempos){
    $db = new Conexion();
    $conn = $db->conectar();
    $bd_table = "solicitante";
   
    
    $query = "UPDATE ".$bd_table." SET rut = '".$elRut."', nombre = '".$elNombre."', email='".$elEmail."', telefono='".$elTelefono."', edad='".$laEdad."', ocupaciones='".$lasOcupaciones."', pasatiempos='".$losPasatiempos."' WHERE id = '".$id_del_solicitante."';";
    
    $resultado = mysqli_query($conn,$query);
    if (!$resultado) {
        die('Consulta no válida: ' . mysqli_error());
    }
    
    mysqli_close($conn);
}

?>