<h1> CRUD </h1>

<a href="formulario.html">ingresar mascota</a><br>
<hr>
<?php
Include_once ('crud.php');

?>
<table border="1">
<tr>
    <td><b>NOMBRE</b></td>
    <td><b>ESPECIE</b></td> 
    <td><b>EDAD</b></td> 
    <td><b>SEXO</b></td> 
    <td><b>DESCRIPCIÓN</b></td> 

    <td><b>ACCIONES</b></td>     
</tr>

<?php
$resultado = obtenerMascotas();
//print_r($resultado);
$count=0;

for($i=0;$i< count($resultado);$i++){
    $nombre = $resultado[$i]["nombre"];
    $especie = $resultado[$i]["especie"];
    $edad = $resultado[$i]["edad"];
    $sexo = $resultado[$i]["sexo"];
    $descripcion = $resultado[$i]["descripcion"];
    $id = $resultado[$i]["id"];
?>
            <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $especie;?></td>
            <td><?php echo $edad;?></td>
            <td><?php echo $sexo;?></td>
            <td><?php echo $descripcion;?></td>
            
            <td>
                <a href="eliminar.php?id=<?php echo $id;?>">ELIMINAR</a><br>
                <a href="update.php?id=<?php echo $id;?>">ACTUALIZAR</a><br>
             
            </td>
            </tr>
 

<?php
}
echo "</table>";
?>