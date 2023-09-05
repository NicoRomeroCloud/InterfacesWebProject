<?php
Include_once ('crud.php');

$id_eliminar = $_GET['id'];


if(eliminar($id_eliminar)){

    header("Location: http://localhost/trabajo-interfaces-web/mascota/prueba.php");
    
    exit();

}else{


    echo "error al eliminar";

    die();
}

//redirigir....

?>
