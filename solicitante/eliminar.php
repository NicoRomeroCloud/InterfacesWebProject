<?php
Include_once ('crud.php');

$id_eliminar = $_GET['id'];


if(eliminar($id_eliminar)){

    header("Location: http://localhost/trabajo-interfaces-web/solicitante/prueba.php");
    
    exit();

}else{


    echo "Error al eliminar";

    die();
}


?>
