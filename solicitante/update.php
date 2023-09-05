<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZANDO SOLICITANTE</title>
</head>

<body>
<h1>ACTUALIZANDO DATOS SOLICITANTE</h1>

<?php
Include_once ('crud.php');

$datos = obtenerPorId($_GET['id']);

?>

<form action="procesaUpdate.php?id=<?php echo $_GET['id'];?>" method="post">

    <br>RUT : <input type="text" name="rut" required value="<?php echo $datos['rut'];?>"></br>
    <br>NOMBRE : <input type="text" name="nombre" required value="<?php echo $datos['nombre'];?>"><br>
    <br>EMAIL: <input type="email" name="email" required value="<?php echo $datos['email'];?>"></br>
    <br>TELEFONO:  +569<input type="text" name="telefono" required value="<?php echo $datos['telefono'];?>"></br>
    <br>EDAD: <input type="number" name="edad" required value="<?php echo $datos['edad'];?>"></br>
    <br>OCUPACIONES: <input type="text" name="ocupaciones" required value="<?php echo $datos['ocupaciones'];?>"></br>
    <br>PASATIEMPOS: <input type="text" name="pasatiempos" required value="<?php echo $datos['pasatiempos'];?>"></br>

   <input type="submit" value="actualizar datos">

</form>

</body>
</html>