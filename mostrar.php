<?php
include 'conexionBDD.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos adoptantes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </style>

    
</head>
<body>


<table class="table">
            <thead>
                <tr>
                
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col-3">¿Porque adoptar según adoptante?</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
				$query = $bdd->query("SELECT * FROM persona");
				if($query->num_rows > 0){
					while($row = $query->fetch_assoc()){
			?>
                <tr>
                    <th scope="row"><?php echo $row['id'];?></th>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['rut'];?></td>
                    <td><?php echo $row['correo'];?></td>
                    <td><?php echo $row['direccion'];?></td>
                    <td><?php echo $row['telefono'];?></td>
                    <td class="col-3"><?php echo $row['adopcion'];?></td>
                </tr>
            </tbody>
            <?php
					}
				} else { ?>
            <h2><b><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-empty" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <line x1="9" y1="10" x2="9.01" y2="10" />
  <line x1="15" y1="10" x2="15.01" y2="10" />
  <line x1="9" y1="15" x2="15" y2="15" />
</svg> Todo tranquilo por acá, no hay registros de adoptantes en la base de datos <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-empty" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <line x1="9" y1="10" x2="9.01" y2="10" />
  <line x1="15" y1="10" x2="15.01" y2="10" />
  <line x1="9" y1="15" x2="15" y2="15" />
</svg></b></h2>
            <?php
				} ?>
        </table>


</body>
</html>
