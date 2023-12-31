<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>xd</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br> Has iniciado sesión de manera correcta!
      <br>
      <a href="logout.php">
        Salir
      </a>
    <?php else: ?>
      <h1>Por favor ingresa o registrate</h1>

      <a href="login.php">Ingresar</a> o
      <a href="signup.php">Registrate</a>
    <?php endif; ?>
    <h1> Mantener un registro de usuario es una forma más de verte comprometido en adoptar, esperamos no molestarte, saludos!</h1>
  </body>
</html>
