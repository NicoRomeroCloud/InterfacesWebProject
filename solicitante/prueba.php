<h1> CRUD </h1>

<a href="formulario.html">ingresar solicitante</a><br>
<hr>
<?php
Include_once ('crud.php');

?>
<table border="1">
<tr>
    <td><b>RUT</b></td>
    <td><b>NOMBRE</b></td>
    <td><b>EMAIL</b></td> 
    <td><b>TELEFONO</b></td> 
    <td><b>EDAD</b></td> 
    <td><b>OCUPACIONES</b></td> 
    <td><b>PASATIEMPOS</b></td> 
    <td><b>ACCIONES</b></td>     
</tr>

<?php
$resultado = obtenerSolicitantes();
//print_r($resultado);
$count=0;

for($i=0;$i< count($resultado);$i++){

    $rut = $resultado[$i]['rut'];
    $nombre = $resultado[$i]['nombre'];
    $email = $resultado[$i]['email'];
    $telefono = $resultado[$i]['telefono'];
    $edad = $resultado[$i]['edad'];
    $ocupaciones = $resultado[$i]['ocupaciones'];
    $pasatiempos = $resultado[$i]['pasatiempos'];
    $id = $resultado[$i]["id"];
?>
            <tr>
            <td><?php echo $rut; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $telefono;?></td>
            <td><?php echo $edad;?></td>
            <td><?php echo $ocupaciones;?></td>
            <td><?php echo $pasatiempos;?></td>
            
            <td>
                <a href="eliminar.php?id=<?php echo $id;?>">ELIMINAR</a><br>
                <a href="update.php?id=<?php echo $id;?>">ACTUALIZAR</a><br>
             
            </td>
            </tr>
 

<?php
}
echo "</table>";
?>