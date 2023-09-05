<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZANDO MASCOTA</title>
</head>

<body>
<h1>ACTUALIZANDO MASCOTA</h1>

<?php
Include_once ('crud.php');

$datos = obtenerPorId($_GET['id']);

?>

<form action="procesaUpdate.php?id=<?php echo $_GET['id'];?>" method="post">

    <br>NOMBRE : <input type="text" name="nombre" required value="<?php echo $datos['nombre'];?>"><br>
    <br>ESPECIE: <input type="text" name="especie" required value="<?php echo $datos['especie'];?>"></br>
    <br>EDAD: <input type="number" name="edad" required value="<?php echo $datos['edad'];?>"></br>
    <br>SEXO: <input type="text" name="sexo" required value="<?php echo $datos['sexo'];?>"></br>
    <br>DESCRIPCIÓN: <input type="text" name="descripcion" required value="<?php echo $datos['descripcion'];?>"></br>

   <input type="submit" value="actualizar datos">

</form>

</body>
</html>