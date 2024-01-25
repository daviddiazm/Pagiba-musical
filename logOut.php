<?php
session_start();

if (isset($_POST['salir'])) {
  session_destroy();
  header('location:login.php');
  exit();
}

if (isset($_POST['permanecer'])) {
  header('location:home.php');
  exit();
}

$tiempoFin = time();
$tiempoInicio = $_SESSION['tiempoInicio'];
$tiempoTranscurrido = $tiempoFin - $_SESSION['tiempoInicio'];
$segundos = $tiempoTranscurrido / 1000000;
$segundosRound = round($segundos);
$tiempoEnMinutos = $tiempoTranscurrido * 60;

echo "Su tiempo en la aplicacion fue de ".$tiempoTranscurrido." segundos ✨😊";
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicación para Niños</title>
</head>
<body style="width: 100vw; height:100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 10px; background-color: #ffe6e6; font-family: 'Comic Sans MS', cursive;">

  <p style="font-size: 18px; color: #333;">¿Deseas salir de la aplicación?</p>
  
  <form action="logOut.php" method="post">
    <input type="submit" value="Permanecer" name="permanecer" style="background-color: #66ccff; color: #fff; font-size: 16px; padding: 10px 20px; border: none; cursor: pointer;">
    <input type="submit" value="¡Salir!" name="salir" style="background-color: #ff6666; color: #fff; font-size: 16px; padding: 10px 20px; border: none; cursor: pointer;">
  </form>

</body>
</html>
